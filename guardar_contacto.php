<?php
//Verifica si el fomularo fue enviado
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Obtener los datos del furmulario
    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $celular = htmlspecialchars($_POST["celular"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    echo($nombre)."<br>";
    echo($correo)."<br>";
    echo($celular)."<br>";
    echo($mensaje)."<br>";

    //Formatear los datos para guardar en el archivo
    $datos = "Nombre: $nombre\nCorreo: $correo\nCelular: $celular\nMensaje: $mensaje\n--------------------------\n";
    //Intentar abri el archivo en modo append
    $archivo = fopen("contacto.txt","a");
    if($archivo){
        fwrite($archivo,$datos); //Escribe los datos en el archivo
        fclose($archivo); //Cierra el archivo
        echo"Los datos se guardaron correctamente";

    }else{
        echo"Error al guardar los datos";
    }

}else{
    echo"Acceso denegado";

}
?>