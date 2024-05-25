<?php
  include '../Conexiones/Conexion.php';
  $idMembresiaModal = isset($_POST['idMembresiaModal']) ? $_POST['idMembresiaModal'] : '';
  $idAlumnoModal = isset($_POST['idAlumnoModal']) ? $_POST['idAlumnoModal'] : '';
  $idDisciplinaModal = isset($_POST['idDisciplinaModal']) ? $_POST['idDisciplinaModal'] : '';   
  $horarioModal = isset($_POST['horarioModal']) ? $_POST['horarioModal'] : '';
  $capacidadModal = isset($_POST['capacidadModal']) ? $_POST['capacidadModal'] : '';
  $costoMensualidadModal = isset($_POST['costoMensualidadModal']) ? $_POST['costoMensualidadModal'] : '';
  $operacionesModal = isset($_POST['operacionesModal']) ? $_POST['operacionesModal'] : '';
  $nombrePadreModal = isset($_POST['nombrePadreModal']) ? $_POST['nombrePadreModal'] : '';
  $nombreMadreModal = isset($_POST['nombreMadreModal']) ? $_POST['nombreMadreModal'] : '';
  $idPadreModal = isset($_POST['idPadreModal']) ? $_POST['idPadreModal'] : '';
  $idMadreModal = isset($_POST['idMadreModal']) ? $_POST['idMadreModal'] : '';
  $celularEmergenciaModal = isset($_POST['celularEmergenciaModal']) ? $_POST['celularEmergenciaModal'] : '';
  $idEmergenciaModal = isset($_POST['idEmergenciaModal']) ? $_POST['idEmergenciaModal'] : '';
  $query = "UPDATE membresia SET id_alumno = '$idAlumnoModal', id_disciplina = '$idDisciplinaModal', horario = '$horarioModal', capacidad = '$capacidadModal', costo_mensualidad = '$costoMensualidadModal' WHERE id_membresia = '$idembresiaModal'";
  
  if ($conn->query($query) === TRUE) {
    echo "Membresia modificada exitosamente";
  } else {
    echo "Error: " . $query . "<br>" . $con->error;
  }

  $conn->close();

?>
