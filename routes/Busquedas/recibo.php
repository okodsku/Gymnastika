<?php


ob_start();
?>

<?php   

include '../Conexiones/Conexion.php';

$sql = "SELECT * FROM alumnos";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato PDF - Datos de Alumnos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 200px;
            height: auto;
        }
        .table-responsive {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="ruta/al/logo.png" alt="Logo del gimnasio">
        </div>
        <h2 class="text-center">Datos de Alumnos</h2>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha de Ingreso</th>
                        <th>CURP</th>
                        <th>Información de Padre</th>
                        <th>Información de Madre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id_alumno"]. "</td>";
                            echo "<td>" . $row["nombres"]. " " . $row["apellidos"]. "</td>";
                            echo "<td>" . $row["fecha_ingreso"]. "</td>";
                            echo "<td>" . $row["curp"]. "</td>";
                            echo "<td>" . $row["info_padre_id"]. "</td>";
                            echo "<td>" . $row["info_madre_id"]. "</td>";
                            echo "</tr>";
                        }
                    } 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php
$html=ob_get_clean();
echo $html;

?>

<?php
use Dompdf\Dompdf;
require_once __DIR__ . "C:\xampp\htdocs\Gymnastika\Lib\dompdf\autoload.inc.php";

$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled'=> true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("Recibo_de_pago.pdf", array("Attachment" => true));

?>
