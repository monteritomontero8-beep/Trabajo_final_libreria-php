<?php
require("conexion.php");

$id = $_GET["id"];

$sql = "DELETE FROM titulos WHERE id_titulo='$id'";

if($conn->query($sql) === TRUE){
    header("Location: libros.php");
} else {
    echo "Error al eliminar: " . $conn->error;
}
?>