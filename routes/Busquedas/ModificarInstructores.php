<?php
  include '../Conexiones/Conexion.php';
  $idInstructorModal = isset($_POST['idInstructorModal']) ? $_POST['idInstructorModal'] : '';
  $nombresModal = isset($_POST['nombresModal']) ? $_POST['nombresModal'] : '';
  $apellidosModal = isset($_POST['apellidosModal']) ? $_POST['apellidosModal'] : '';   
  $domicilioModal = isset($_POST['domicilioModal']) ? $_POST['domicilioModal'] : '';
  $celularModal = isset($_POST['celularModal']) ? $_POST['celularModal'] : '';
  $correoModal = isset($_POST['correoModal']) ? $_POST['correoModal'] : '';
  $sueldoModal = isset($_POST['sueldoModal']) ? $_POST['sueldoModal'] : '';

  $query = "UPDATE instructores SET nombres = '$nombresModal', apellidos = '$apellidosModal', domicilio = '$domicilioModal', celular = '$celularModal', sueldo = '$sueldoModal'  WHERE id_instructor = '$idInstructorModal'";

  if ($conn->query($query) === TRUE) {
    echo "Instructor modificado exitosamente";
  } else {
    echo "Error: " . $query . "<br>" . $con->error;
  }

  $conn->close();

?>

