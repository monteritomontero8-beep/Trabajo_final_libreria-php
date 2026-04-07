<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=libreria", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM autores";
    $resultado = $conexion->query($sql);

    $autores = $resultado->fetchAll();

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Autores</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<!-- Menú -->
<nav class="mb-4">
    <a href="libros.php" class="btn btn-primary">Libros</a>
    <a href="autores.php" class="btn btn-success">Autores</a>
    <a href="contacto.php" class="btn btn-warning">Contacto</a>
</nav>

<h2 class="text-center mb-4">Lista de Autores</h2>

<p><strong>Total de autores:</strong> <?php echo count($autores); ?></p>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Completo</th>
            <th>Teléfono</th>
            <th>Ciudad</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($autores as $autor): ?>
        <tr>
            <td><?php echo $autor['id_autor']; ?></td>
            <td><?php echo $autor['nombre'] . " " . $autor['apellido']; ?></td>
            <td><?php echo $autor['telefono']; ?></td>
            <td><?php echo $autor['ciudad']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>