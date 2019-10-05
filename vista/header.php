<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="Vendedor.php">Vendedores</a></li>
                <li><a href="producto.php">Productos</a></li>
                <li><a href="factura.php">Facturas</a></li>
                <li><a href="categoria.php">Categorias</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><?php echo "<a href='../modelo/salir.php'><span class='glyphicon glyphicon-log-in'></span> Cerrar sesión </a>" ?>;</li>
            </ul>
        </div>
    </div>
</nav>