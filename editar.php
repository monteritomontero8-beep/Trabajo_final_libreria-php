<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require("conexion.php");

$id = $_GET["id"];

// Obtener datos del libro
$sql = "SELECT * FROM titulos WHERE id_titulo='$id'";
$resultado = $conn->query($sql);
$fila = $resultado->fetch_assoc();

// Si se envía el formulario
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $titulo = $_POST["titulo"];
    $precio = $_POST["precio"];

    $sql = "UPDATE titulos 
            SET titulo='$titulo', precio='$precio'
            WHERE id_titulo='$id'";

    if($conn->query($sql) === TRUE){
        header("Location: libros.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Libro</title>
</head>
<body>

<h2>Editar Libro</h2>

<form method="POST">
    Título: <input type="text" name="titulo" value="<?php echo $fila['titulo']; ?>"><br><br>
    Precio: <input type="text" name="precio" value="<?php echo $fila['precio']; ?>"><br><br>

    <button type="submit">Actualizar</button>
</form>

</body>
</html>