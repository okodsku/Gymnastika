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
            <th style='text-align: center;'>Operaciones</th>
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
                <button class='btn btn-primary mb-1' style='margin-right: 10px; border-color:#0e3e69; background-color:#0e3e69;' onclick='mostrar(" . $row["id_instructor"] . ")'>Ver Detalles</button>
                <button class='btn btn-secondary mb-1' style= 'border-color:#3d5d71; background-color:#3d5d71;' onclick='modificar(" . $row["id_instructor"] . ")'>Modificar</button>
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