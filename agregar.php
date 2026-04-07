<?php
require("conexion.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $precio = $_POST["precio"];

    $sql = "INSERT INTO titulos (id_titulo, titulo, precio) 
            VALUES ('$id', '$titulo', '$precio')";

    if($conn->query($sql) === TRUE){
        echo "Libro agregado correctamente";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agregar Libro</title>
</head>
<body>

<h2>Agregar Libro</h2>

<form method="POST">
    ID: <input type="text" name="id" required><br><br>
    Título: <input type="text" name="titulo" required><br><br>
    Precio: <input type="text" name="precio"><br><br>

    <button type="submit">Guardar</button>
</form>

</body>
</html>