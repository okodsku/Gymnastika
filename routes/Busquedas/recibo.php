<?php   

include '../Conexiones/Conexion.php';
$id = $_GET['id'];
$sql = "SELECT p.id_pago as idPago, p.fecha_pago as fechaPago, p.monto_pago as monto, d.nombre as nombreClase, a.nombres as nombreAlumno,  a.apellidos as apellidoAlumno FROM pagos p INNER JOIN membresia m ON p.id_membresia=m.id_membresia INNER JOIN disciplina d ON d.id_disciplina=m.id_disciplina INNER JOIN alumnos a ON m.id_alumno = a.id_alumno WHERE p.id_pago = $id";
$result = $conn->query($sql); 
$row = $result->fetch_assoc();
ob_start(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formato PDF - Datos de Alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  </head>
  <body>
    <div class="col-12">
      <div class="card" style="border:5px solid #0e3e69; border-radius: 15px">
        <div class="card-body"> 
        <div class="row d-flex justify-content-between mt-2 mb-2">
            <div class="text-left">
              <img src="http://localhost/gymnastika/src/images/v2_4.png" width="70px" alt="Logo del gimnasio"> 
              <div class="text-right">
                <p>FECHA: <strong><?php echo $row['fechaPago']?> </strong></p>
              </div>
            </div>
          </div>
          <div>
            <p>                                                                                                                                               Recibo #<?php echo $row['idPago'] ?></p>
          </div>
          <div>
            <p>Recibi de: <strong> <u> <?php echo $row['nombreAlumno'] ?> <?php echo $row['apellidoAlumno'] ?></u> </strong> </p> 
          </div>
          <div>
            <p>Cantidad de: $<?php echo $row['monto'] ?> <u>pesos m/n</u></p>
          </div>
          <div>
            <p>Concepto: Mensualidad de <?php echo $row['nombreClase'] ?> </p> 
          </div>
          <div class="row d-flex justify-content-between mt-2 mb-2">
            <div class="text-right">
              <p>( )  Transferencia</p> 
              <p>( )  Efectivo</p> 
            </div>
            <br>
            <div class="text-left">
              <p>Recibido: </p>
            </div>
          </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
<!-- <div class="container">
        <div class="logo">
            <img src="http://localhost/gymnastika/src/images/v2_4.png" width="100px" alt="Logo del gimnasio">
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
                    // if ($result->num_rows > 0) {
                    //     while($row = $result->fetch_assoc()) {
                    //         echo "<tr>";
                    //         echo "<td>" . $row["id_alumno"]. "</td>";
                    //         echo "<td>" . $row["nombres"]. " " . $row["apellidos"]. "</td>";
                    //         echo "<td>" . $row["fecha_ingreso"]. "</td>";
                    //         echo "<td>" . $row["curp"]. "</td>";
                    //         echo "<td>" . $row["info_padre_id"]. "</td>";
                    //         echo "<td>" . $row["info_madre_id"]. "</td>";
                    //         echo "</tr>";
                    //     }
                    // } 
                    ?>
                </tbody>
            </table>
        </div>
    </div> -->

<?php
$html = ob_get_clean();
require '../../vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$options = $dompdf->getOptions(); $options->set(array('isRemoteEnabled'=>
true)); $dompdf->setOptions($options); 
$html .= '<style> @page { size: 8.5in 6.0in; margin: 0.3in; } </style>';
$dompdf->loadHtml($html);

$dompdf->render();
$dompdf->stream("Recibo_de_pago.pdf", array("Attachment" => false)); 
?>
