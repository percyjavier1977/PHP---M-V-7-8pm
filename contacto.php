<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h2>Fomulario de Contacto</h2>
    <form action="guardar_contacto.php" method="post">
        <label for="codigo">Codigo</label>
        <input type="text" name="codigo" id="codigo">
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>

        <label for="correo">Correo Electrónico</label>
        <input type="email" name="correo" id="correo" required>
        <br><br>

        <label for="celular">Celular:</label>
        <input type="tel" name="celular" id="celular" required>
        <br><br>

        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" rows="4" required></textarea>
        <br><br>

        <button type="submit">Enviar</button>
        <button type="reset">Limpiar</button>

    </form>
</body>
</html>