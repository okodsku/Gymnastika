<?php   

include '../Conexiones/Conexion.php';
$id = $_GET['id'];
$sql = "SELECT p.id_pago as idPago, p.fecha_pago as fechaPago, p.monto_pago as monto, d.nombre as nombreClase FROM pagos p INNER JOIN membresia m ON p.id_membresia=m.id_membresia INNER JOIN disciplina d ON d.id_disciplina=m.id_disciplina WHERE p.id_pago = $id";
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
      <div class="card">
        <div class="card-body">
          <div class="row d-flex justify-content-between mt-2 mb-2">
            <div class="text-left">
              <img src="http://localhost/gymnastika/src/images/v2_4.png" width="70px" alt="Logo del gimnasio"> 
            </div>
            <div class="text-right">
             <p>FECHA: <?php echo $row['fechaPago'] ?></p>
            </div>
          </div>
          <div>
            <p>                                                                                                                         #<?php echo $row['idPago'] ?></p>
          </div>
          <div>
            <p>Recibi de:___________________________________________________   $<?php echo $row['monto'] ?></p> 
          </div>
          <div>
            <p>Cantidad de: <u>pesos m/n</u></p>
          </div>
          <div>
            <p>Concepto: Mensualidad de </p>
                              <?php echo $row['nombreClase'] ?>
          </div>
          <div class="row d-flex justify-content-between mt-2 mb-2">
            <div class="text-right">
              <p>(X)  Transferencia</p> 
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
true)); $dompdf->setOptions($options); $dompdf->loadHtml($html);
$dompdf->setPaper('letter'); $dompdf->render();
$dompdf->stream("Recibo_de_pago.pdf", array("Attachment" => false)); 
?>
