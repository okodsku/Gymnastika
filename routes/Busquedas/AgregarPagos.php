<?php
include '../Conexiones/Conexion.php';

$id_membresia = isset($_POST['id_membresia']) ? $_POST['id_membresia'] : '';
$fecha_pago = isset($_POST['fecha_pago']) ? $_POST['fecha_pago'] : '';
$monto_pago = isset($_POST['monto_pago']) ? $_POST['monto_pago'] : '';



$sql = "INSERT INTO membresia (id_membresia, fecha_pago, monto_pago)
VALUES ('$id_membresia', '$fecha_pago', '$monto_pago')";
if ($conn->query($sql) === TRUE) {
    echo "Pago generado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>