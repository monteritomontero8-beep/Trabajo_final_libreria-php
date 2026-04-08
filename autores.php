<?php
include("conexion.php");

$sql = "SELECT * FROM autores";
$resultado = $conexion->query($sql);
$autores = $resultado->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autores</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    h2 {
        color: #333;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        background: white;
    }

    th {
        background-color: #555;
        color: white;
    }

    td, th {
        padding: 8px;
        text-align: left;
    }

    tr:nth-child(even) {
        background-color: #eee;
    }

    a {
        display: inline-block;
        margin-top: 10px;
        margin-right: 10px;
        color: blue;
        text-decoration: none;
    }
    </style>

</head>
<body>

<h2>Lista de Autores</h2>

<p>Total de autores: <?php echo count($autores); ?></p>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Ciudad</th>
    </tr>

    <?php foreach($autores as $autor): ?>
    <tr>
        <td><?php echo $autor['id_autor']; ?></td>
        <td><?php echo $autor['nombre'] . " " . $autor['apellido']; ?></td>
        <td><?php echo $autor['telefono']; ?></td>
        <td><?php echo $autor['ciudad']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<br>

<a href="libros.php">Libros</a>
<a href="contacto.php">Contacto</a>

</body>
</html>