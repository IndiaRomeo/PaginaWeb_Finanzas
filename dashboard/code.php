<?php 

$connection = mysqli_connect("localhost", "root", "", "db");

//Editar Usuario
if(isset($_POST['btnGuardar'])){
    $id = $_POST['editId'];
    $nombre = $_POST['editNombre'];
    $lastName = $_POST['editLastName'];
    $email = $_POST['editEmail'];
    $documento = $_POST['editDocumento'];
    $nDocumento = $_POST['editNDocumento'];
    $direccion = $_POST['editDireccion'];
    $tiempo = $_POST['editTiempo'];
    $estadoCivil = $_POST['EditEstadoCivil'];
    $personas = $_POST['editPersonas'];
    $prestamos = $_POST['editPrestamos'];
    $trabaja = $_POST['editTrabaja'];
    $salarioMensual = $_POST['editSalarioMensual'];
    $gastos = $_POST['editGastos'];
    $motivo = $_POST['editMotivo'];
    $monto = $_POST['editMonto'];
    $cuota = $_POST['editCuota'];
    $saldo = $_POST['editSaldo'];
    $cuenta = $_POST['editCuenta'];
    $ruta = $_POST['editRuta'];
    $estado = $_POST['editEstado'];
    $tipoCuenta = $_POST['editTipoCuenta'];

    $query = "UPDATE users SET nombre='$nombre', lastName='$lastName', email='$email', documento='$documento', nDocumento='$nDocumento', direccion='$direccion', tiempo='$tiempo', estadoCivil='$estadoCivil', personas='$personas', prestamos='$prestamos', trabaja='$trabaja', salarioMensual='$salarioMensual', gastos='$gastos', motivo='$motivo', monto='$monto', cuota='$cuota', saldo='$saldo', cuenta='$cuenta', ruta='$ruta', estado='$estado', tipoCuenta='$tipoCuenta' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=listUsers">';
        echo '<div class="container mt-3">
        <div class="alert alert-success">
        <center><font color="green">¡Usuario actulizado con éxito!</font></center>
        </div>
        </div>';
    } else {
        echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=editUsers">';
        echo '<div class="container mt-3">
        <div class="alert alert-danger">
        <center><font color="red">¡Ups! Ha ocurrido un error al actualizar el usuario.</font></center>
        </div>
        </div>';
    }



}

//Eliminar Usuario
if(isset($_POST['btnDelete'])){
    $id = $_POST['deleteId'];

    $query = "DELETE FROM users WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=listUsers">';
        echo '<div class="container mt-3">
        <div class="alert alert-success">
        <center><font color="green">¡Usuario eliminado con éxito!</font></center>
        </div>
        </div>';
    } else {
        echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=listUsers">';
        echo '<div class="container mt-3">
        <div class="alert alert-danger">
        <center><font color="red">¡Ups! Ha ocurrido un error al eliminar el usuario.</font></center>
        </div>
        </div>';
    }





}


//Ver Usuario
/*if(isset($_POST['btnView'])){
    if(isset($_GET['viewId'])){
        
    $id = $_GET['viewId'];

    $query = "SELECT FROM users WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    }

}*/




include('includes/scripts.php')
?>