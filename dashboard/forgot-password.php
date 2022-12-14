<?php 
include('config/conexion.php');

session_start();

if(isset($_SESSION['id'])){
    if(isset($_POST['btnChange'])){
        if(isset($_GET['passw'])){
            echo "Ocurrió un error.";
        } else {
            if($_POST['passnew'] == $_POST['passnew2']){
               /*if($_POST['documento'] == $_SESSION['nDocumento']){*/
                    $passold = $_POST['passold'];
                    $req = $bdd->prepare('SELECT * FROM users WHERE id='.$_SESSION['id'].'');
                    $req->execute();
                    while($pass7 = $req->fetch()){
                        if($passold == $pass7['password']){
                        $change_psw = $bdd->prepare('UPDATE users SET password = ? WHERE id='.$_SESSION['id'].'');
                        $change_psw->bindParam(1, $_POST['passnew'], PDO::PARAM_STR);
                        $change_psw->execute();
                        session_unset();

                        session_destroy();
                        echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=../index">';
                        $valido = '<div class="container mt-3">
                        <div class="alert alert-success">
                        <center>¡Felicitaciones! La contraseña se cambió correctamente.</center>
                        </div>';
                        } else {$errorPass = '<div class="container mt-3">
                            <div class="alert alert-danger">
                            <center>¡Ups! La contraseña actual ingresada es incorrecta.</center>
                            </div>
                            </div>';}
                    }
               /*} else{$error = '<div class="container mt-3">
                    <div class="alert alert-danger">
                    ¡Ups! El número de documento es incorrecto.
                    </div>
                    </div>';
                }*/
            } else {$error = '<div class="container mt-3">
                <div class="alert alert-danger">
                <center>¡Ups! Las contraseñas no coinciden.</center>
                </div>
                </div>';}
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Axxel Capital - Recuperar Contraseña</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-7">
                                <div class="p-4">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">¿Olvidaste tu contraseña?</h1>
                                        <p class="mb-4">Lo entendemos, pasan cosas. Sólo tienes que introducir tu dirección de correo electrónico a continuación
                                            <br/><br/>¡y le enviaremos un enlace para restablecer su contraseña!</p>
                                    </div>
                                    <form class="user" action="#ins" method="POST">
                                        <?php
                                        if(isset($valido)){
                                            echo $valido;
                                        }
                                        if(isset($errorPass)){
                                            echo $errorPass;
                                        }
                                        if(isset($error)){
                                            echo $error;
                                        }
                                        ?>
                                        <div class="form-group">
                                            <input type="password" name="passold" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Contraseña antigua">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="passnew" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Contraseña nueva">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="passnew2" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Confirmar contraseña nueva">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="btnChange">Restablecer contraseña</button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>
<?php } else{
    $errorCuenta = '<div class="container mt-3">
    <div class="alert alert-warning">
    <center>¡Ups! error inesperado.</center>
    </div>
    </div>';
}?>
<?php
include('includes/scripts.php');
?>