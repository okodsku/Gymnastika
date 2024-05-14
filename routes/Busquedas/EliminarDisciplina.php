<?php 
include '../Conexiones/Conexion.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

$sql = "DELETE FROM disciplina WHERE id_disciplina = $id";
$result = $conn->query($sql);

if ($result) {
    echo "Disciplina eliminada correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>