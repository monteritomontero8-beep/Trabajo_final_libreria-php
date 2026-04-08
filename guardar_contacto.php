<?php
include("conexion.php");

if($_POST){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];

    $sql = "INSERT INTO contacto (nombre, correo, asunto, comentario)
            VALUES (:nombre, :correo, :asunto, :comentario)";

    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':asunto', $asunto);
    $stmt->bindParam(':comentario', $comentario);

    if($stmt->execute()){
        echo "Mensaje guardado correctamente.<br><br>";
        echo "<a href='contacto.php'>Volver</a>";
    } else {
        echo "Error al guardar.";
    }
}
?>