<?php
  include '../Conexiones/Conexion.php';
  $idDisciplinaModal = isset($_POST['idDisciplinaModal']) ? $_POST['idDisciplinaModal'] : '';
  $nombreModal = isset($_POST['nombreModal']) ? $_POST['nombreModal'] : '';
  $idInstructorModal = isset($_POST['idInstructorModal']) ? $_POST['idInstructorModal'] : '';
  $costoClaseModal = isset($_POST['costoClaseModal']) ? $_POST['costoClaseModal'] : '';   
  $horarioModal = isset($_POST['horarioModal']) ? $_POST['horarioModal'] : '';
  $diaSemanaModal = isset($_POST['diaSemanaModal']) ? $_POST['diaSemanaModal'] : '';

  $query = "UPDATE disciplina SET nombre = '$nombreModal', id_instructor = '$idInstructorModal', costo_clase = '$costoClaseModal', horario = '$horarioModal', dia_semana = '$diaSemanaModal' WHERE id_disciplina = '$idDisciplinaModal'";
  
  if ($conn->query($query) === TRUE) {
    echo "Disciplina modificada exitosamente";
  } else {
    echo "Error: " . $query . "<br>" . $con->error;
  }

  $conn->close();

?>
