<?php
  include '../Conexiones/Conexion.php';
  $idAlumnoModal = isset($_POST['idAlumnoModal']) ? $_POST['idAlumnoModal'] : '';
  $nombresModal = isset($_POST['nombresModal']) ? $_POST['nombresModal'] : '';
  $apellidosModal = isset($_POST['apellidosModal']) ? $_POST['apellidosModal'] : '';   
  $CurpModal = isset($_POST['CurpModal']) ? $_POST['CurpModal'] : '';
  $tiposangreModal = isset($_POST['tiposangreModal']) ? $_POST['tiposangreModal'] : '';
  $alergiasModal = isset($_POST['alergiasModal']) ? $_POST['alergiasModal'] : '';
  $operacionesModal = isset($_POST['operacionesModal']) ? $_POST['operacionesModal'] : '';
  $nombrePadreModal = isset($_POST['nombrePadreModal']) ? $_POST['nombrePadreModal'] : '';
  $nombreMadreModal = isset($_POST['nombreMadreModal']) ? $_POST['nombreMadreModal'] : '';
  $idPadreModal = isset($_POST['idPadreModal']) ? $_POST['idPadreModal'] : '';
  $idMadreModal = isset($_POST['idMadreModal']) ? $_POST['idMadreModal'] : '';
  $celularEmergenciaModal = isset($_POST['celularEmergenciaModal']) ? $_POST['celularEmergenciaModal'] : '';
  $idEmergenciaModal = isset($_POST['idEmergenciaModal']) ? $_POST['idEmergenciaModal'] : '';
  $query = "UPDATE alumnos SET nombres = '$nombresModal', apellidos = '$apellidosModal', curp = '$CurpModal', tipo_sangre = '$tiposangreModal', alergias = '$alergiasModal', operaciones = '$operacionesModal', info_padre_id = '$idPadreModal', info_madre_id = '$idMadreModal'  WHERE id_alumno = '$idAlumnoModal'";
  $query2 = "UPDATE contacto_emergencia SET num_celular = '$celularEmergenciaModal' WHERE id_emergencia = '$idEmergenciaModal'";
  if ($conn->query($query2) === TRUE) {
  }else{
    echo "Error: " . $query2 . "<br>" . $con->error;
  }
  if ($conn->query($query) === TRUE) {
    echo "Alumno modificado exitosamente";
  } else {
    echo "Error: " . $query . "<br>" . $con->error;
  }

  $conn->close();

?>
