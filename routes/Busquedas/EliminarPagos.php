<?php 
include '../Conexiones/Conexion.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

$sql = "DELETE FROM pagos WHERE id_pago = $id";
$result = $conn->query($sql);

if ($result) {
    echo "Recibo eliminado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>