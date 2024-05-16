<?php
include '../Conexiones/Conexion.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$sql = "SELECT m.id_membresia as idMembresia, a.nombres as nombreAlumno, a.apellidos as apellidoAlumno, d.nombre as nombreDisciplina, m.horario as horario, m.capacidad as capacidad, m.costo_mensualidad as costo_mensualidad FROM membresia m INNER JOIN alumnos a ON m.id_alumno = a.id_alumno INNER JOIN disciplina d ON m.id_disciplina = d.id_disciplina WHERE m.id_membresia= $id ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='row'>";
        echo "<div class='col-md-4'><label>ID Membresia</label><input type='text' class='form-control' value='" . $row["idMembresia"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Alumno</label><input type='text' class='form-control' value='" . $row["nombreAlumno"] . " " . $row["apellidoAlumno"] ."' readonly></div>";
        echo "<div class='col-md-4'><label>Disciplina</label><input type='text' class='form-control' value='" . $row["nombreDisciplina"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Horario</label><input type='text' class='form-control' value='" . $row["horario"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Capacidad</label><input type='text' class='form-control' value='" . $row["capacidad"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Costo Mensual</label><input type='text' class='form-control' value='" . $row["costo_mensualidad"] . "' readonly></div>";
        echo "</div>";
    }
} else {
    
}
$conn->close();
?>