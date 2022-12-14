<?php 
include 'configuration/conexion.php';
?>
<!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
            </div>
            <div class="col-lg-6 px-5 text-end">
            <small><i class="fa fa-envelope text-primary me-2"></i>AxxelCapital@axxelcapital.com </small>
            <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i><a href="https://wa.link/utwpmf" style="color: gray;">WhatsApp</a></small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 text-primary m-0">Axxel Capital</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index" class="nav-item nav-link active">Inicio</a>
                    
                    <?php if(!isset($_SESSION['id'])){
                        echo '<a href="login" class="nav-item nav-link">Iniciar sesión</a>
                              <a href="simulation" class="nav-item nav-link">Simulación</a>
                              <a href="contact" class="nav-item nav-link">Contacto</a>
                        ';
                    }elseif($_SESSION['rol'] >= "1") {
                        echo '<a id="menu3" href="dashboard/index" class="nav-item nav-link">Panel</a>
                        <a id="menu3" href="logout" class="nav-item nav-link">Cerrar sesión</a>';
                    } 
                    else {
                        echo '
                        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mi cuenta</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="profile" class="dropdown-item">Información</a>
                            <a href="transfers" class="dropdown-item">Transferencias</a>
                            <a href="buy" class="dropdown-item">Métodos de pago</a>
                            <a href="forgot-password" class="dropdown-item">Cambiar contraseña</a>
                        </div>
                        </div>
                        <a id="menu2" href="simulation" class="nav-item nav-link">Simulación</a>
                        <a id="menu2" href="contact" class="nav-item nav-link">Contacto</a>
                        <a id="menu2" href="logout" class="nav-item nav-link">Cerrar sesión</a>
                        ';
                    }

                    ?>

                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->