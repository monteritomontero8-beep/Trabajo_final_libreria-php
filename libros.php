<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=libreria", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM titulos";
    $resultado = $conexion->query($sql);

    $libros = $resultado->fetchAll();

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
</head>
<body>

<h2>Libros disponibles</h2>

<p>Total de libros: <?php echo count($libros); ?></p>

<table border="1" cellpadding="6">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Ventas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($libros as $libro): ?>
        <tr>
            <td><?php echo $libro['id_titulo']; ?></td>
            <td><?php echo $libro['titulo']; ?></td>
            <td><?php echo $libro['tipo']; ?></td>
            <td>
                <?php echo !empty($libro['precio']) ? "$" . $libro['precio'] : 'N/A'; ?>
            </td>
            <td>
                <?php echo !empty($libro['total_ventas']) ? $libro['total_ventas'] : 'N/A'; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br>

<a href="autores.php">Ir a autores</a>

</body>
</html>