function agregardatos(codigo, nombre, apellido, telefono, email) {
    cadena = "codigo=" + codigo +
            "&nombre=" + nombre +
            "&apellido=" + apellido +
            "&telefono=" + telefono +
            "&email=" + email;
    $.ajax({
        type: "POST",
        url: "../modelo/accionesClientes.php?accion=registrar",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../vista/componentes/clientesMostrar.php');
                alertify.success("Cliente agregado con exito");
            } else {
                alertify.error("El cliente ya existe");
            }
        }
    });
}

function agregaform(datos) {
    d = datos.split('||');
    $('#codigou').val(d[0]);
    $('#nombreu').val(d[1]);
    $('#apellidou').val(d[2]);
    $('#telefonou').val(d[3]);
    $('#emailu').val(d[4]);
}

function modificarCliente() {
    codigo = $('#codigou').val();
    nombre = $('#nombreu').val();
    apellido = $('#apellidou').val();
    telefono = $('#telefonou').val();
    email = $('#emailu').val();

    cadena = "codigo=" + codigo +
            "&nombre=" + nombre +
            "&apellido=" + apellido +
            "&telefono=" + telefono +
            "&email=" + email;
    $.ajax({
        type: "POST",
        url: "../modelo/accionesClientes.php?accion=modificar",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../vista/componentes/clientesMostrar.php');
                //alert('Cliente actualizado con exitos');
                alertify.success("Cliente actualizado con exito");
            } else {
                alertify.error("Fallo el servidor");
            }
        }
    });
}

function preguntarSiNo(codigo, nombre, apellido) {
    alertify.confirm('Eliminar cliente', '¿Está seguro de eliminar el cliente ' + nombre + ' ' + apellido + '?',
            function () {
                eliminarDatos(codigo)
            }
    , function () {
        alertify.error('Se ha cancelado la eliminación.')
    });
}

function eliminarDatos(codigo) {
    cadena = "codigo=" + codigo;
    $.ajax({
        type: "POST",
        url: "../modelo/accionesClientes.php?accion=eliminar",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../vista/componentes/clientesMostrar.php');
                alertify.success("Eliminado con exito");
            } else {
                alertify.error("Fallo el servidor");
            }
        }
    });
}