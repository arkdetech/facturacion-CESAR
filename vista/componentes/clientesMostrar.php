<?php
require_once "../../modelo/conexion.php";
$conexion = conexion();
?>
<div class="row">
    <br>
    <br>
    <br>
    <br>
    <div>
        <center>
            <h2>Clientes</h2>
        </center>
        <button class="btn btn-primary navbar-right" data-toggle="modal" data-target="#modalNuevo">
            Agregar cliente 
            <span class="glyphicon glyphicon-plus"></span>
        </button>
    </div>
    <div class="col-sm-12 table-responsive">
        <br>
        <table class="table table-hover table-condensed table-bordered table-responsive">
            <tr>
                <td>CÓDIGO</td>
                <td>NOMBRE</td>
                <td>APELLIDO</td>
                <td>TELEFONO</td>
                <td>EMAIL</td>
                <td>EDITAR</td>
                <td>ELIMINAR</td>
            </tr>
            <?php
            $sql = "SELECT * FROM cliente";
            $result = mysqli_query($conexion, $sql);
            while ($ver = mysqli_fetch_assoc($result)) {
                $datos = $ver['codigo'] . "||" .
                        $ver['nombre'] . "||" .
                        $ver['apellido'] . "||" .
                        $ver['telefono'] . "||" .
                        $ver['email'];
                ?>
                <tr>
                    <td><?php echo $ver['codigo']; ?></td>
                    <td><?php echo $ver['nombre'] ?></td>
                    <td><?php echo $ver['apellido'] ?></td>
                    <td><?php echo $ver['telefono'] ?></td>
                    <td><?php echo $ver['email'] ?></td>
                    <td>
                        <button class="btn btn-warning glyphicon glyphicon-pencil" 
                                data-toggle="modal" 
                                data-target="#modalEdicion" 
                                onclick="agregaform('<?php echo $datos ?>')">
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger glyphicon glyphicon-remove" 
                                onclick="preguntarSiNo('<?php echo $ver['codigo'] ?>','<?php echo $ver['nombre'] ?>','<?php echo $ver['apellido'] ?>')">
                        </button>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <br>
    </div>
    <?php
    $conexion->close();
    ?>  
</div>