<?php
include '../Conexiones/Conexion.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$sql = "SELECT  m.id_membresia as id_membresia, a.nombres as nombres, 
a.apellidos as apellidos, d.nombre as dnombre, m.horario as horario, m.capacidad as capacidad, 
m.costo_mensualidad as costo_mensualidad FROM membresia m INNER JOIN alumnos a ON a.id_alumno = m.id_alumnos INNER JOIN disciplina d ON d.id_disciplina = m.id_disciplina WHERE m.id_membresia = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='row'>";
        echo "<div class='col-lg-12 d-flex justify-content-started mt-2 mb-2'>";
        echo "<button class='btn btn-success mr-1' onclick='mostrarAlumnos(\"1\")'>Asignar Alumno</button>";
        echo "<button class='btn btn-info' onclick='mostrarDisciplinas(\"1\")'>Asignar Disciplina</button>";
        echo "</div>";
        echo "</div>";
        echo "<form action='' method='post' id='formModificarDisciplina'>";
        echo "<div class='row'>";
        echo "<div class='col-md-4'><label>ID Membresia</label><input type='text' id='idMembresiaModal' name='idMembresiaModal' class='form-control' value='" . $row["id_membresia"] . "' readonly></div>";
        echo "<div class='col-md-4'><label>Nombre</label><input required id='nombresModal' name='nombresModal' type='text' class='form-control' value='" . $row["nombres"] . "' ></div>";
        echo "<div class='col-md-4'><label>Apellidos</label><input required id='apellidosModal' name='apellidosModal' type='text' class='form-control' value='" . $row["apellidos"] . "' ></div>";
        echo "<div class='col-md-4'><label>Disciplina</label><input required id='disciplinaModal' name='disciplinaModal' type='text' class='form-control' value='" . $row["dnombre"] . "' ></div>";
        echo "<div class='col-md-4'><label>Horario</label><input id='horarioModal' name='horarioModal' type='text' class='form-control' value='" . $row["horario"] . "' ></div>";
        echo "<div class='col-md-4'><label>Capacidad</label><input id='capacidadModal' name='capacidadModal' type='text' class='form-control' value='" . $row["caapacidad"] . "' ></div>";
        echo "<div class='col-md-4'><label>Costo Mensual</label><input id='costoMensualidadModal' name='costoMensualidadModal' type='text' class='form-control' value='" . $row["costo-mensualidad"] . "' ></div>";
        echo "</div>";
        echo "</form>";
        echo "<div class='row'>";
        echo "<button class='btn btn-primary mt-2' style='margin-right: 10px; border-color:#0e3e69; background-color:#0e3e69;' onclick='guardarMembresia()'>Guardar</button>";
        echo "</div>";
    }
} else {
    
}
$conn->close();
?>