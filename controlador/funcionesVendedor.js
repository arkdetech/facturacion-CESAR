function agregardatos(id_vendedor, nombre, apellido, direccion, fecha_nacimiento, telefono, email) {
    cadena = "id_vendedor=" + id_vendedor +
            "&nombre=" + nombre +
            "&apellido=" + apellido +
            "&direccion=" + direccion +
            "&fecha_nacimiento=" + fecha_nacimiento +
            "&telefono=" + telefono +
            "&email=" + email;
    $.ajax({
        type: "POST",
        url: "../modelo/accionesVendedor.php?accion=registrar",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../vista/componentes/vendedorMostrar.php');
                alertify.success("Vendedor agregado con exito");
            } else {
                alertify.error("El vendedor ya existe");
            }
        }
    });
}

function agregaform(datos) {
    d = datos.split('||');
    $('#id_vendedoru').val(d[0]);
    $('#nombreu').val(d[1]);
    $('#apellidou').val(d[2]);
    $('#direccionu').val(d[3]);
    $('#fecha_nacimientou').val(d[4]);
    $('#telefonou').val(d[5]);
    $('#emailu').val(d[6]);
}

function modificarVendedor() {
    id_vendedor = $('#id_vendedoru').val();
    nombre = $('#nombreu').val();
    apellido = $('#apellidou').val();
    direccion = $('#direccionu').val();
    fecha_nacimiento = $('#fecha_nacimientou').val();
    telefono = $('#telefonou').val();
    email = $('#emailu').val();

    cadena = "id_vendedor=" + id_vendedor +
            "&nombre=" + nombre +
            "&apellido=" + apellido +
            "&direccion=" + direccion +
            "&fecha_nacimiento=" + fecha_nacimiento +
            "&telefono=" + telefono +
            "&email=" + email;
    $.ajax({
        type: "POST",
        url: "../modelo/accionesVendedor.php?accion=modificar",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../vista/componentes/vendedorMostrar.php');
                //alert('Vendedor actualizado con exitos');
                alertify.success("Vendedor actualizado con exito");
            } else {
                alertify.error("Fallo el servidor");
            }
        }
    });
}

function preguntarSiNo(id_vendedor, nombre, apellido) {
    alertify.confirm('Eliminar vendedor', '¿Está seguro de eliminar el vendedor ' + nombre + ' ' + apellido + '?',
            function () {
                eliminarDatos(id_vendedor)
            }
    , function () {
        alertify.error('Se ha cancelado la eliminación.')
    });
}

function eliminarDatos(id_vendedor) {
    cadena = "id_vendedor=" + id_vendedor;
    $.ajax({
        type: "POST",
        url: "../modelo/accionesVendedor.php?accion=eliminar",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../vista/componentes/vendedorMostrar.php');
                alertify.success("Eliminado con exito");
            } else {
                alertify.error("Fallo el servidor");
            }
        }
    });
}