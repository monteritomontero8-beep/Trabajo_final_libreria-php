<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>
<body>

<h2>Formulario de Contacto</h2>

<form action="guardar_contacto.php" method="POST">
    Nombre: <input type="text" name="nombre" required><br><br>
    
    Correo: <input type="email" name="correo" required><br><br>
    
    Asunto: <input type="text" name="asunto" required><br><br>

    Comentario:<br>
    <textarea name="comentario" required></textarea><br><br>

    <button type="submit">Enviar</button>
</form>

</body>
</html>