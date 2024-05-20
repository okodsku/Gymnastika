<?php
include('../../conexion.php');

$id = $_POST['id'];

$query = "SELECT * FROM alumnos WHERE id='$id'";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode([]);
}

$con->close();
?>
