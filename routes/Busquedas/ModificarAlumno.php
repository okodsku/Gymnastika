<?php
include '../Conexiones/Conexion.php';

    // Obtener datos del formulario
    $id_alumno = isset($_POST['id_alumno']) ? $_POST['id_alumno'] : '';
    $fecha_ingreso = isset($_POST['fecha_ingreso']) ? $_POST['fecha_ingreso'] : '';
    $nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
    $curp = isset($_POST['curp']) ? $_POST['curp'] : '';
    $tipo_sangre = isset($_POST['tipo_sangre']) ? $_POST['tipo_sangre'] : '';
    $alergias = isset($_POST['alergias']) ? $_POST['alergias'] : '';
    $operaciones = isset($_POST['operaciones']) ? $_POST['operaciones'] : '';

    $nombreEmergencia = isset($_POST['nombreCE']) ? $_POST['nombreCE'] : '';
    $telefonoEmergencia = isset($_POST['celularCE']) ? $_POST['celularCE'] : '';

    $query = "UPDATE alumnos SET fecha_ingreso='$fecha_ingreso', nombres='$nombres', apellidos='$apellidos', curp='$curp', tipo_sangre='$tipo_sangre', alergias='$alergias', operaciones='$operaciones', idP='$idP', idM='$idM', nombreCE='$nombreCE', celularCE='$celularCE' WHERE id='$id'";

    if ($con->query($query) === TRUE) {
        echo "Alumno modificado exitosamente";
    } else {
        echo "Error: " . $query . "<br>" . $con->error;
    }

    $conn->close();

?>
