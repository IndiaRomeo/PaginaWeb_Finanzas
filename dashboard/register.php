<?php
//session_start();
include('includes/header.php');
include('includes/navbar.php');

$connection = mysqli_connect("localhost", "root", "", "db");

if(isset($_POST['btnRegister'])){
    if($_POST['password'] == $_POST['cPassword']) {
    $nombre = $_POST['nombre'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];
    $documento = $_POST['documento'];
    $nDocumento = $_POST['nDocumento'];
    $direccion = $_POST['direccion'];
    $tiempo = $_POST['tiempo'];
    $estadoCivil = $_POST['estadoCivil'];
    $personas = $_POST['personas'];
    $prestamos = $_POST['prestamos'];
    $trabaja = $_POST['trabaja'];
    $salarioMensual = $_POST['salarioMensual'];
    $gastos = $_POST['gastos'];
    $motivo = $_POST['motivo'];
    $monto = $_POST['monto'];
    $cuota = $_POST['cuota'];
    $saldo = $_POST['saldo'];
    $cuenta = $_POST['cuenta'];
    $ruta = $_POST['ruta'];
    $estado = $_POST['estado'];
    $tipoCuenta = $_POST['tipoCuenta'];

    
    if($_POST['nombre'] == '' || $_POST['lastName'] == '' || $_POST['email'] == '' || $_POST['password'] == '' || $_POST['cPassword'] == '' || $_POST['documento'] == '' || $_POST['nDocumento'] == '' || $_POST['direccion'] == '' || $_POST['tiempo'] == '' || $_POST['estadoCivil'] == '' || $_POST['personas'] == '' || $_POST['prestamos'] == '' || $_POST['trabaja'] == '' || $_POST['salarioMensual'] == '' || $_POST['gastos'] == '' || $_POST['motivo'] == '' || $_POST['monto'] == '' || $_POST['cuota'] == '' || $_POST['saldo'] == '' || $_POST['cuenta'] == '' || $_POST['ruta'] == '' || $_POST['estado'] == '' || $_POST['tipoCuenta'] == '') {
        echo '<META HTTP-EQUIV="Refresh" CONTENT="0.5; URL=register">';
        $errorCampos = '<div class="container mt-3">
        <div class="alert alert-danger">
        <center>¡Ups! Debes completar todos los campos.</center>
        </div>
        </div>';

    }  /*if($_POST['email'] != 0 || $_POST['nDocumento'] != 0){
        echo '<META HTTP-EQUIV="Refresh" CONTENT="0.5; URL=register.php">';
        $errorEmail = '<div class="container mt-3">
        <div class="alert alert-danger">
        <center>¡Ups! Correo electrónico/N° documento existente.</center>
        </div>
        </div>';
    } */else {
        $query = "INSERT INTO users (nombre,lastName,email,password,documento,nDocumento,direccion,tiempo,estadoCivil
        ,personas,prestamos,trabaja,salarioMensual,gastos,motivo,monto,cuota,saldo,cuenta,ruta,estado,tipoCuenta)
        VALUES ('$nombre','$lastName','$email','$password','$documento','$nDocumento','$direccion','$tiempo','$estadoCivil ','$personas',
        '$prestamos','$trabaja','$salarioMensual','$gastos','$motivo','$monto','$cuota','$saldo','$cuenta','$ruta','$estado','$tipoCuenta ')";
    
        $query_run = mysqli_query($connection, $query);
        
        if($query_run){
            echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=register">';
            $validacion = '<div class="container mt-3">
            <div class="alert alert-success">
            <center>¡Felicitaciones! Cuenta creada con éxito.</center>
            </div>';
        } else {
            echo '<META HTTP-EQUIV="Refresh" CONTENT="0.5; URL=register">';
            $errorUsuario = '<div class="container mt-3">
            <div class="alert alert-danger">
            <center>¡Ups! Ha ocurrido un error.</center>
            </div>
            </div>';
        }
    }

    }//Passwords 
        else {
            $errorPassword = '<div class="container mt-3">
            <div class="alert alert-danger">
            <center>¡Ups! Las contraseñas no coinciden.</center>
            </div>
            </div>';
        }

}//Final

?>


<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-4">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-0 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">¡Crear Cuenta!</h1>
                            </div>
                            <?php 
                            if(isset($errorPassword)){
                                echo $errorPassword;
                            }
                            if(isset($errorUsuario)){
                                echo $errorUsuario;
                            }
                            if(isset($errorCampos)){
                                echo $errorCampos;
                            }
                           /*if(isset($errorEmail)){
                                echo $errorEmail;
                            }*/
                            if(isset($validacion)){
                                echo $validacion;
                            }
                            ?>
                            <form class="user" action="#ins" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nombre" id="nombre" placeholder="Nombre" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="lastName" id="lastName" placeholder="Apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="E-mail" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Contraseña" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="cPassword" id="cPassword" placeholder="Confirmar Contraseña" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="documento" id="documento" placeholder="Tipo de Documento" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" name="nDocumento" id="nDocumento" placeholder="N° de Documento" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="direccion" id="direccion" placeholder="Dirección" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="number" class="form-control form-control-user" name="tiempo" id="tiempo" placeholder="Tiempo de Residencia" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="estadoCivil" id="estadoCivil" placeholder="Estado Civil" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" name="personas" id="personas" placeholder="Personas a Cargo" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="prestamos" id="prestamos" placeholder="Prestamos Activos" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="trabaja" id="trabaja" placeholder="Trabaja Actual" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="salarioMensual" id="salarioMensual" placeholder="Salario Mensual" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="gastos" id="gastos" placeholder="Gastos Mensuales" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="motivo" id="motivo" placeholder="Motivo de la Solicitud" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="monto" id="monto" placeholder="Monto a Solicitar" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="cuota" id="cuota" placeholder="Cuota Estimada" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="saldo" id="saldo" placeholder="Saldo" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="cuenta" id="cuenta" placeholder="Número de Cuenta" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="ruta" id="ruta" placeholder="Número de Ruta" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="estado" id="estado" placeholder="Estado de la Cuenta" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="tipoCuenta" id="tipoCuenta" placeholder="Tipo de Cuenta" required>
                                    </div>
                                </div>
                                <button type="submit" name="btnRegister" class="btn btn-primary btn-user btn-block" >Registrar Cuenta</button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>