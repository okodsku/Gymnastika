<?php
include '../Conexiones/Conexion.php';

$fecha_ingreso = isset($_POST['fecha_ingreso']) ? $_POST['fecha_ingreso'] : '';
$nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
$curp = isset($_POST['curp']) ? $_POST['curp'] : '';
$tipo_sangre = isset($_POST['tipo_sangre']) ? $_POST['tipo_sangre'] : '';
$alergias = isset($_POST['alergias']) ? $_POST['alergias'] : '';
$operaciones = isset($_POST['operaciones']) ? $_POST['operaciones'] : '';

$idPadre = isset($_POST['idP']) ? $_POST['idP'] : '';
$idMadre = isset($_POST['idM']) ? $_POST['idM'] : '';
$nombreEmergencia = isset($_POST['nombreCE']) ? $_POST['nombreCE'] : '';
$telefonoEmergencia = isset($_POST['celularCE']) ? $_POST['celularCE'] : '';

$sql = "INSERT INTO contacto_emergencia (nombre, num_celular) VALUES ('$nombreEmergencia', '$telefonoEmergencia')";
if ($conn->query($sql) === TRUE) {
  $sql = "SELECT id_emergencia FROM contacto_emergencia ORDER BY id_emergencia DESC LIMIT 1"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $idEmergencia = $row["id_emergencia"]; 
} 

$sql = "INSERT INTO alumnos (fecha_ingreso, nombres, apellidos, curp, tipo_sangre, alergias, operaciones ,info_padre_id ,info_madre_id ,emergencia_id ,contacto_emergencia_id )
VALUES ('$fecha_ingreso', '$nombres', '$apellidos', '$curp', '$tipo_sangre', '$alergias', '$operaciones' , $idPadre,$idMadre,$idEmergencia,0)";

if ($conn->query($sql) === TRUE) {
    echo "Alumno agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>