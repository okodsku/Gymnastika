<?php
include '../Conexiones/Conexion.php';

$id_alumno = isset($_POST['id_alumno']) ? $_POST['id_alumno'] : '';
$id_disciplina = isset($_POST['id_disciplina']) ? $_POST['id_disciplina'] : '';
$horario = isset($_POST['horario']) ? $_POST['horario'] : '';
$capacidad = isset($_POST['capacidad']) ? $_POST['capacidad'] : '';
$costo_mensualidad = isset($_POST['costo_mensualidad']) ? $_POST['costo_mensualidad'] : '';




$sql = "INSERT INTO membresia (id_alumno, id_disciplina, horario, capacidad, costo_mensualidad)
VALUES ('$id_alumno', '$id_disciplina', '$horario', '$capacidad', '$costo_mensualidad')";

if ($conn->query($sql) === TRUE) {
    echo "Membresia agregada correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>