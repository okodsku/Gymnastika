<?php
include '../Conexiones/Conexion.php';
$sql = "SELECT * FROM disciplina";
$result = $conn->query($sql);
?>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>ID Instructor</th>
            <th>Costo</th>
            <th>Horario</th>
            <th>Dias_Semana</th>
            <th>Operaciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_disciplina"]. "</td>";
                echo "<td>" . $row["nombre"]. "</td> " ; 
                echo "<td>". $row["id_instructor"]. "</td>";
                echo "<td>" . $row["costo_clase"]. "</td>";
                echo "<td>" . $row["horario"]. "</td>";
                echo "<td>" . $row["dia_semana"]. "</td>";
                echo "<td style='text-align: center;'>
                <button class='btn btn-danger mb-1' style='margin-right: 10px;' onclick='eliminar(" . $row["id_disciplina"] . ")'>Eliminar</button>
                <button class='btn btn-primary mb-1' style='margin-right: 10px;' onclick='mostrar(" . $row["id_disciplina"] . ")'>Ver Detalles</button>
                <button class='btn btn-secondary mb-1' onclick='modificar(" . $row["id_disciplina"] . ")'>Modificar</button>
            </td>";
                echo "</tr>";
            }
        } 
        ?>
    </tbody>
</table>
<script>
    $('#example').DataTable({
        language: {
        url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json'
        }
    });
</script>