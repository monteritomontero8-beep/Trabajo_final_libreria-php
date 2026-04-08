<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #e6ecf0, #f8f9fa);
        margin: 0;
    }

    .contenedor {
        width: 400px;
        margin: 40px auto;
        background: white;
        padding: 20px;
        border-radius: 5px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    img {
        width: 100%;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    input, textarea {
        width: 100%;
        padding: 7px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #4a69bd;
        color: white;
        border: none;
    }

    button:hover {
        background-color: #3b55a0;
    }

    .links {
        margin-top: 10px;
        text-align: center;
    }

    a {
        margin: 5px;
        text-decoration: none;
        color: #4a69bd;
    }
    </style>

</head>
<body>

<div class="contenedor">

    <h2>Contacto</h2>

    <!-- IMAGEN -->
    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216" alt="contacto">

    <form method="POST" action="guardar_contacto.php">
        <input type="text" name="nombre" placeholder="Nombre" required>

        <input type="email" name="correo" placeholder="Correo" required>

        <input type="text" name="asunto" placeholder="Asunto" required>

        <textarea name="comentario" placeholder="Comentario" required></textarea>

        <button type="submit">Enviar</button>
    </form>

    <div class="links">
        <a href="libros.php">Libros</a>
        <a href="autores.php">Autores</a>
    </div>

</div>

</body>
</html>