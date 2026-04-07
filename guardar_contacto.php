<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=libreria", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario)
            VALUES (NOW(), :correo, :nombre, :asunto, :comentario)";

    $stmt = $conexion->prepare($sql);

    $stmt->execute([
        ':correo' => $_POST['correo'],
        ':nombre' => $_POST['nombre'],
        ':asunto' => $_POST['asunto'],
        ':comentario' => $_POST['comentario']
    ]);

    echo "Mensaje enviado correctamente";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>