<?php
include '../Conexiones/Conexion.php';
$sql = "SELECT * FROM instructores";
$result = $conn->query($sql);
?>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Celular</th>
            <th>Sueldo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_instructor"]. "</td>";
                echo "<td>" . $row["nombres"]. "</td> " ; 
                echo "<td>". $row["apellidos"]. "</td>";
                echo "<td>" . $row["celular"]. "</td>";
                echo "<td>" . $row["sueldo"]. "</td>";
                echo "<td style='text-align: center;'>
                <button class='btn btn-danger mb-1' style='margin-right: 10px;' onclick='eliminar(" . $row["id_instructor"] . ")'>Eliminar</button>
                <button class='btn btn-primary mb-1' style='margin-right: 10px;' onclick='mostrar(" . $row["id_instructor"] . ")'>Ver Detalles</button>
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