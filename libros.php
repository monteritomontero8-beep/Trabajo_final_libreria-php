<?php
include("conexion.php");

$sql = "SELECT * FROM titulos";
$resultado = $conexion->query($sql);
$libros = $resultado->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>

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

<h2>Libros disponibles</h2>

<p>Total de libros: <?php echo count($libros); ?></p>

<table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Tipo</th>
        <th>Precio</th>
        <th>Ventas</th>
    </tr>

    <?php foreach($libros as $libro): ?>
    <tr>
        <td><?php echo $libro['id_titulo']; ?></td>
        <td><?php echo $libro['titulo']; ?></td>
        <td><?php echo $libro['tipo']; ?></td>
        <td><?php echo $libro['precio'] ? "$".$libro['precio'] : "N/A"; ?></td>
        <td><?php echo $libro['total_ventas'] ? $libro['total_ventas'] : "N/A"; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<br>

<a href="autores.php">Autores</a>
<a href="contacto.php">Contacto</a>

</body>
</html>