<?php
// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe el código que el usuario desea buscar
    $codigo_buscar = htmlspecialchars($_POST["codigo_buscar"]);
    
    // Verifica si el archivo existe
    $archivo = "contacto.txt";
    if (file_exists($archivo)) {
        // Lee todo el contenido del archivo
        $contenido = file_get_contents($archivo);
        
        // Divide el contenido en bloques separados por "--------------------------"
        $bloques = explode("--------------------------", $contenido);
        
        // Busca el contacto en los bloques
        $encontrado = false;
        foreach ($bloques as $bloque) {
            // Verifica si el bloque contiene el código buscado
            if (stripos($bloque, "Codigo: $codigo_buscar") !== false) {
                $encontrado = true;
                echo "<h2>Datos del Contacto:</h2>";
                echo nl2br(htmlspecialchars(trim($bloque))); // Limpia, escapa y formatea el bloque
                break; //Cerrar el bucle
            }
        }
        
        // Si no encontró el contacto
        if (!$encontrado) {
            echo "No se encontraron resultados para el código: $codigo_buscar.";
        }
    } else {
        echo "No hay contactos guardados aún.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>

