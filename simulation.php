<?php
session_start();
include 'configuration/conexion.php';
include('includes/header.php');
include('includes/navbar.php');


?>

<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="container">
            <h1 class="display-3 mb-4">Simulación Prestamo</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Simulación</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="display-1">Axxel Capital Simulador</h1>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="monto">Monto a Solicitar: </label>
                        <input type="text" class="form-control" id="monto" placeholder="Ingresar monto">
                        </div>
                        <br>
                    <div class="form-group">
                        <label for="tiempo">Tiempo (Meses): </label>
                        <input type="text" class="form-control" id="tiempo" placeholder="Ingresar tiempo">
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary" id="btnCalcular">Calcular</button>
                        <br>
                        <br>
                        <br>
                        <br>
                        <table id="lista-tabla" class="table">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Cuota</th>
                                    <th>Capital</th>
                                    <th>Interés</th>
                                    <th>Saldo</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>