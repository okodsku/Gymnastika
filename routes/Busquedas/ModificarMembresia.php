<?php
  include '../Conexiones/Conexion.php';
  $idMembresiaModal = isset($_POST['idMembresiaModal']) ? $_POST['idMembresiaModal'] : '';
  $idAlumnoModal = isset($_POST['idAlumnoModal']) ? $_POST['idAlumnoModal'] : '';
  $idDisciplinaModal = isset($_POST['idDisciplinaModal']) ? $_POST['idDisciplinaModal'] : '';   
  $horarioModal = isset($_POST['horarioModal']) ? $_POST['horarioModal'] : '';
  $capacidadModal = isset($_POST['capacidadModal']) ? $_POST['capacidadModal'] : '';
  $costoMensualidadModal = isset($_POST['costoMensualidadModal']) ? $_POST['costoMensualidadModal'] : '';
  $query = "UPDATE membresia SET id_alumno = '$idAlumnoModal', id_disciplina = '$idDisciplinaModal', horario = '$horarioModal', capacidad = '$capacidadModal', costo_mensualidad = '$costoMensualidadModal'WHERE id_membresia = '$idembresiaModal'";
  
  if ($conn->query($query) === TRUE) {
    echo "Membresia modificada exitosamente";
  } else {
    echo "Error: " . $query . "<br>" . $con->error;
  }

  $conn->close();

?>
