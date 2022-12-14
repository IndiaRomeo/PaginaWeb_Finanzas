<?php 
include('config/conexion.php');
include('includes/header.php');
include('includes/navbar.php');

if(isset($_GET['id'])){
$row = mysqli_real_escape_string($connection, $_GET['id']);
$query = "SELECT * FROM users WHERE id='$row'";
$query_run = mysqli_query($connection, $query);
$row = mysqli_fetch_array($query_run);

?>


<!-- Begin Page Content -->
<div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Perfil del usuario</h1>
                    <p class="mb-4">Información completa del usuario.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Perfil del usuario <?=$row['nombre'].' '.$row['lastName'];?></h6>
                        </div>
                        <?php }?> 
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php
                            if(isset($_GET['id'])){
                                $row = mysqli_real_escape_string($connection, $_GET['id']);
                                $query = "SELECT * FROM users WHERE id='$row'";
                                $query_run = mysqli_query($connection, $query);

                                if(mysqli_num_rows($query_run) > 0){
                                    $row = mysqli_fetch_array($query_run);
                                    ?>

                                    <div class="mb-9">
                                        <label>N° Documento</label>
                                        <p class="form-control"><?=$row['nDocumento'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tipo de Documento</label>
                                        <p class="form-control"><?=$row['documento'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nombres</label>
                                        <p class="form-control"><?=$row['nombre'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Apellidos</label>
                                        <p class="form-control"><?=$row['lastName'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Dirección</label>
                                        <p class="form-control"><?=$row['direccion'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tiempo de residencia en E.E.U.U</label>
                                        <p class="form-control"><?=$row['tiempo'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Estado civil</label>
                                        <p class="form-control"><?=$row['estadoCivil'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Personas a cargo</label>
                                        <p class="form-control"><?=$row['personas'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Préstamos activos</label>
                                        <p class="form-control"><?=$row['prestamos'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Trabaja actual</label>
                                        <p class="form-control"><?=$row['trabaja'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Ingresos mensuales</label>
                                        <p class="form-control"><?=$row['salarioMensual'];?> USD</p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Gastos</label>
                                        <p class="form-control"><?=$row['gastos'];?> USD</p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Motivo de la solicitud</label>
                                        <p class="form-control"><?=$row['motivo'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Monto solicitado</label>
                                        <p class="form-control"><?=$row['monto'];?> USD</p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Cuota estimada</label>
                                        <p class="form-control"><?=$row['cuota'];?> USD</p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Correo electrónico</label>
                                        <p class="form-control"><?=$row['email'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Saldo</label>
                                        <p class="form-control"><?=$row['saldo'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Número de cuenta</label>
                                        <p class="form-control"><?=$row['cuenta'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Número de ruta</label>
                                        <p class="form-control"><?=$row['ruta'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Estado</label>
                                        <p class="form-control"><?=$row['estado'];?></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tipo de cuenta</label>
                                        <p class="form-control"><?=$row['tipoCuenta'];?></p>
                                    </div>
                                    <?php
                                } else {
                                    echo "No hay ningún usuario.";
                                }
                            }
                            ?>
                        </div>
                    </div>
            </div>
</div>
<!-- /.container-fluid -->
</div>

<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>