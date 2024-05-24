<?php
include '../Conexiones/Conexion.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$sql = "SELECT * FROM disciplina  WHERE id_disciplina = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='row'>";
        echo "<div class='col-lg-12 d-flex justify-content-started mt-2 mb-2'>";
        echo "<button class='btn btn-success mr-1' onclick='mostrarInstructores(\"1\")'>Asignar Instructor</button>";
        echo "</div>";
        echo "</div>";
        echo "<form action='' method='post' id='formModificarDisciplina'>";
        echo "<div class='row'>";
        echo "<div class='col-md-4'><label>ID Disciplina</label><input type='text' id='idDisciplinaModal' name='idDisciplinaModal' class='form-control' value='" . $row["id_disciplina"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Nombre</label><input required id='nombreModal' name='nombreModal' type='text' class='form-control' value='" . $row["nombre"] . "' ></div>";
        echo "<div class='col-md-4'><label>Instructor</label><input required id='idInstructorModal' name='idInstructorModal' type='text' class='form-control' value='" . $row["id_instructor"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Costo de Clase</label><input required id='costoClaseModal' name='costoClaseModal' type='text' class='form-control' value='" . $row["costo_clase"] . "' ></div>";
        echo "<div class='col-md-4'><label>Horario</label><input id='horarioModal' name='horarioModal' type='text' class='form-control' value='" . $row["horario"] . "' ></div>";
        echo "<div class='col-md-4'><label>Dia(s) Semana</label><input id='diaSemanaModal' name='diaSemanaModal' type='text' class='form-control' value='" . $row["dia_semana"] . "' ></div>";
        echo "</div>";
        echo "</form>";
        echo "<div class='row'>";
        echo "<button class='btn btn-primary mt-2' style='margin-right: 10px; border-color:#0e3e69; background-color:#0e3e69;' onclick='guardarDisciplina()'>Guardar</button>";
        echo "</div>";
    }
} else {
    
}
$conn->close();
?>
