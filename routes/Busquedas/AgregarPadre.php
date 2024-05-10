<?php
include '../Conexiones/Conexion.php';

$nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
$domicilio = isset($_POST['domicilio']) ? $_POST['domicilio'] : '';
$celular = isset($_POST['celular']) ? $_POST['celular'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$ocupacion = isset($_POST['ocupacion']) ? $_POST['ocupacion'] : '';

$sql = "INSERT INTO padres (nombres, apellidos, domicilio, celular, correo, ocupacion) VALUES ('$nombres', '$apellidos', '$domicilio', '$celular', '$correo', '$ocupacion')";
if ($conn->query($sql) === TRUE) {
    echo "Padre agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}