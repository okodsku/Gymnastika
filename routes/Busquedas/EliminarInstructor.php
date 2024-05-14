<?php 
include '../Conexiones/Conexion.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

$sql = "DELETE FROM instructores WHERE id_instructor = $id";
$result = $conn->query($sql);

if ($result) {
    echo "Instructor eliminado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>