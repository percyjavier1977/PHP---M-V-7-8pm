<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
</head>
<body>
    <h2>Listas de contactos</h2>
    <?php
    //verificar si el achivo existe
    $archivo = "contacto.txt";
    if (file_exists($archivo)){
        $contenido = file_get_contents($archivo); //Obtiene todo los registros
        if($contenido){
            echo nl2br($contenido);

        }else{
            echo "No se pudo leer el archivo";
        }
    }else{
        echo"No hay registros";
    }

    ?>
</body>
</html>