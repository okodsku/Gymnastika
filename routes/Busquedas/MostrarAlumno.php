<?php
include '../Conexiones/Conexion.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$sql = "SELECT  a.id_alumno as id_alumno, a.fecha_ingreso as fecha_ingreso, a.nombres as nombres, 
a.apellidos as apellidos, a.curp as curp, a.tipo_sangre as tipo_sangre, a.alergias as alergias, 
a.operaciones as operaciones, a.emergencia_id as emergencia_id, a.contacto_emergencia_id as contacto_emergencia_id, 
p.nombres as pnombre, p.apellidos as papellido, p.domicilio as pdomicilio, p.correo as correoP, m.correo as correoM, m.nombres as mnombre, ce.num_celular as numEme, ce.nombre as nomEme, p.celular as celularP, m.celular as celularM FROM alumnos a INNER JOIN padres p ON a.info_padre_id = p.id_padre INNER JOIN padres m ON a.info_madre_id = m.id_padre INNER JOIN contacto_emergencia ce ON a.emergencia_id=ce.id_emergencia  WHERE a.id_alumno = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='row'>";
        echo "<div class='col-md-4'><label>ID Alumno</label><input type='text' class='form-control' value='" . $row["id_alumno"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Fecha Ingreso</label><input type='text' class='form-control' value='" . $row["fecha_ingreso"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Nombres</label><input type='text' class='form-control' value='" . $row["nombres"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Apellidos</label><input type='text' class='form-control' value='" . $row["apellidos"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>CURP</label><input type='text' class='form-control' value='" . $row["curp"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Tipo Sangre</label><input type='text' class='form-control' value='" . $row["tipo_sangre"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Alergias</label><input type='text' class='form-control' value='" . $row["alergias"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Operaciones</label><input type='text' class='form-control' value='" . $row["operaciones"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Domicilio Padres</label><input type='text' class='form-control' value='" . $row["pdomicilio"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Nombre Padre</label><input type='text' class='form-control' value='" . $row["pnombre"] . " ". $row["papellido"] ."' readonly></div>";
        echo "<div class='col-md-4'><label>Nombre Madre</label><input type='text' class='form-control' value='" . $row["mnombre"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Contacto Emergencia</label><input type='text' class='form-control' value='" . $row["nomEme"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Celular del Padre</label><input type='text' class='form-control' value='" . $row["celularP"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Celular de la Madre</label><input type='text' class='form-control' value='" . $row["celularM"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Numero Celular de Emergencia</label><input type='text' class='form-control' value='" . $row["numEme"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Correo del Padre</label><input type='text' class='form-control' value='" . $row["correoP"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Correo de la Madre</label><input type='text' class='form-control' value='" . $row["correoM"] . "' readonly></div>";


        echo "</div>";
    }
} else {
    
}
$conn->close();
?>
