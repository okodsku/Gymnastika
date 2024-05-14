<?php
include '../Conexiones/Conexion.php';

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$id_instructor = isset($_POST['idI']) ? $_POST['idI'] : '';
$costo_clase = isset($_POST['costo_clase']) ? $_POST['costo_clase'] : '';
$horario = isset($_POST['horario']) ? $_POST['horario'] : '';
$dia_semana = isset($_POST['dia_semana']) ? $_POST['dia_semana'] : '';


$sql = "INSERT INTO disciplina (nombre, id_instructor, costo_clase, horario, dia_semana)
VALUES ('$nombre', '$id_instructor', '$costo_clase', '$horario', '$dia_semana')";

if ($conn->query($sql) === TRUE) {
    echo "Instructor agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>