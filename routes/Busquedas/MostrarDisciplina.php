<?php
include '../Conexiones/Conexion.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';

$sql = "SELECT d.id_disciplina as idDisciplina, d.nombre as nombreDisciplina, i.nombres as nombreInstructor, i.apellidos as apeInstructor, d.costo_clase as costo_clase, d.horario as horario, d.dia_semana as dia_semana FROM disciplina d INNER JOIN instructores i ON d.id_instructor = i.id_instructor WHERE d.id_disciplina= $id ";

//$sql = "SELECT * FROM disciplina WHERE id_disciplina = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='row'>";
        echo "<div class='col-md-4'><label>ID Disciplina</label><input type='text' class='form-control' value='" . $row["idDisciplina"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Disciplina</label><input type='text' class='form-control' value='" . $row["nombreDisciplina"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Instructor</label><input type='text' class='form-control' value='" . $row["nombreInstructor"] . " " . $row["apeInstructor"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Costo</label><input type='text' class='form-control' value='" . $row["costo_clase"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Horario</label><input type='text' class='form-control' value='" . $row["horario"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Dias de Semana</label><input type='text' class='form-control' value='" . $row["dia_semana"] . "' readonly></div>";
        echo "</div>";
    }
} else {
    
}
$conn->close();
?>