<?php
//error_reporting(0);
session_start();

include 'configuration/conexion.php';
include('includes/header.php');
include('includes/navbar.php');

if(isset($_POST['send'])){
    $user = $_POST['email'];
    $pass = $_POST['password'];

    $conect = $bdd->query('SELECT * FROM users WHERE email="'.$user.'"');
    $numbCompte = $conect->rowCount();
    if($numbCompte == 0){
        $errorCuenta = '<div class="container mt-3">
        <div class="alert alert-warning alert-dismissible fade show">
        <button class="btn-close" data-bs-dismiss="alert"></button>
        ¡Ups! Correo electrónico/Contraseña incorrecta.
        </div>
    </div>';
    } else {
        $verif_pass = $bdd->query('SELECT * FROM users WHERE email="'.$user.'" AND password="'.$pass.'"');
        $pass_n = $verif_pass->rowCount();
        if($pass_n != 0){
            $conn = $bdd->query('SELECT * FROM users WHERE email="'.$user.'" AND password="'.$pass.'"');
            while($data = $conn->fetch()){
                $_SESSION['id'] = $data['id'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['rol'] = $data['admin'];
                echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=index">';
                $valido = '<div class="container mt-3">
                <div class="alert alert-success alert-dismissible fade show">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                ¡Felicitaciones! Inicio de sesión correctamente.
                </div>';
            }
        } else {
            $errorPass = '<div class="container mt-3">
            <div class="alert alert-danger alert-dismissible fade show">
            <button class="btn-close" data-bs-dismiss="alert"></button>
            ¡Ups! Correo electrónico/Contraseña incorrecta.
            </div>
            </div>';
        }
    }
}

?>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5">
        <div class="container">
            <h1 class="display-3 mb-4">Iniciar sesión</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Iniciar sesión</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Page Header End -->

<!-- Login Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-5">Iniciar Sesión</h1>
                <form action="#ins" method="POST" class="form-group">
                    <?php
                        if(isset($errorCuenta)){
                            echo $errorCuenta;
                        } elseif(isset($errorPass)){
                            echo $errorPass;
                        } elseif(isset($valido)) {
                            echo $valido;
                        }
                    ?>
                    <label> Correo electrónico:</label>
                    <br /><input type="email" name="email" placeholder="Correo electrónico" class="form-control" required><br />
                    <br><label>Contraseña: </label>
                    <br /><input type="password" name="password" placeholder="Contraseña" class="form-control" required><br />
                    <br /><input type="submit" name="send" value="send" class="btn btn-primary">
            </form>
            </div>
        </div>
    </div>
    <!-- Login End -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>