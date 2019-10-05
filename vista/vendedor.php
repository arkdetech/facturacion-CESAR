<?php
session_start();
error_reporting(0);
$nom = $_SESSION['usuario'];
$docu = $_SESSION['documento'];

if ($nom == NULL && $docu == NULL) {
    header("location:sesion.php");
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vendedor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <?php
        include('librerias.php');
        ?>
        <script src="../controlador/funcionesVendedor.js"></script>
    </head>
    <body id="body">
        <?php
        include 'header.php';
        ?>
        <div class="container">
            <div id="tabla"></div>
        </div>
        <!-- MODAL PARA INSERTAR REGISTROS -->
        <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Agregar Vendedor</h4>
                    </div>
                    <div class="modal-body">
                        <label>id_vendedor</label>
                        <input type="text" id="id_vendedor" class="form-control input-sm" required="">
                        <label>Nombre</label>
                        <input type="text" id="nombre" class="form-control input-sm" required="">
                        <label>Apellido</label>
                        <input type="text" id="apellido" class="form-control input-sm" required="">
                        <label>Direccion</label>
                        <input type="text" id="direccion" class="form-control input-sm" required="">
                        <label>Fecha-Nacimiento</label>
                         <input type="date" id="fecha_nacimiento" class="form-control input-sm" required="">
                        <label>Telefono</label>
                        <input type="text" id="telefono" class="form-control input-sm" required="">
                        <label>Email</label>
                        <input type="text" id="email" class="form-control input-sm" required="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
                            Agregar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL PARA EDICION DE DATOS-->
        <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                    </div>
                    <div class="modal-body">
                        <input type="text" hidden="" id="id_vendedoru">
                        <label>Nombre</label>
                        <input type="text" id="nombreu" class="form-control input-sm" required="">
                        <label>Apellido</label>
                        <input type="text" id="apellidou" class="form-control input-sm" required="">
                        <label>Direccion</label>
                        <input type="text" id="direccionu" class="form-control input-sm" required="">
                        <label>Fecha-Nacimiento</label>
                        <input type="date" id="fecha_nacimientou" class="form-control input-sm" required="">
                        <label>Telefono</label>
                        <input type="text" id="telefonou" class="form-control input-sm" required="">
                        <label>Email</label>
                        <input type="text" id="emailu" class="form-control input-sm" required="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="actualizadatos">
                            Actualizar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#tabla').load('componentes/vendedorMostrar.php');
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#guardarnuevo').click(function () {
                    id_vendedor = $('#id_vendedor').val();
                    nombre = $('#nombre').val();
                    apellido = $('#apellido').val();
                    direccion = $('#direccion').val();
                    fecha_nacimiento = $('#fecha_nacimiento').val();
                    telefono = $('#telefono').val();
                    email = $('#email').val();
                    agregardatos(id_vendedor, nombre, apellido, direccion, telefono, email);
                });
                $('#actualizadatos').click(function () {
                    modificarVendedor();
                });

            });
        </script>
        <?php
        include './footer.php';
        ?>
    </body>
</html>