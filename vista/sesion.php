<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inicio de sesión</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Librerías CSS -->
        <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
        <!-- Librerías JS -->
        <script src="../librerias/jquery-3.3.1.min.js"></script>
        <script src="../librerias/bootstrap/js/bootstrap.js"></script>
        <script src="../librerias/alertifyjs/alertify.js"></script>
    </head>
    <body style="background-color: whitesmoke">
        <!-- INICIAR SESION -->
        <br>
        <div class="container">
            <div><h1 class="text-center">BIENVENIDO</h1></div>
            <br/>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form role="form" action="../modelo/iniciarsesion.php" method="post">
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
                        <input type="text" class="form-control" name="usuario" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Número de documento</label>
                        <input type="number" class="form-control" name="documento" placeholder="Documento">
                    </div>
                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Iniciar sesión</button>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <br/><br/>
        <?php
        include 'footer.php';
        ?>
        <script>
            $(document).ready(function () {
                $("#myBtn").click(function () {
                    $("#myModal").modal();
                });
            });
        </script>
    </body>
</html>