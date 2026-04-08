<?php
try {
    $conexion = new PDO(
        "mysql:host=sql100.infinityfree.com;dbname=if0_41605788_libreria",
        "if0_41605788",
        "Vangola42"
    );
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>