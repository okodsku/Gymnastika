<?php
include '../Conexiones/Conexion.php';

$nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
$domicilio = isset($_POST['domicilio']) ? $_POST['domicilio'] : '';
$celular = isset($_POST['celular']) ? $_POST['celular'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$sueldo = isset($_POST['sueldo'] ) ? $_POST['sueldo'] : '';




$sql = "INSERT INTO instructores (nombres, apellidos, domicilio, celular, correo, sueldo)
VALUES ('$nombres', '$apellidos', '$domicilio', '$celular', '$correo', '$sueldo')";

if ($conn->query($sql) === TRUE) {
    echo "Instructor agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>