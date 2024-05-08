<?php 
include '../Conexiones/Conexion.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

$sql = "DELETE FROM alumnos WHERE id_alumno = $id";
$result = $conn->query($sql);

if ($result) {
    echo "Alumno eliminado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>