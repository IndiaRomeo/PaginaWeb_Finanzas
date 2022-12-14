<?php
session_start();
include 'configuration/conexion.php';
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5">
        <div class="container">
            <h1 class="display-3 mb-4">Métodos de pago</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Mi cuenta</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Métodos de pago</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Page Header End -->

<!-- 404 Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>