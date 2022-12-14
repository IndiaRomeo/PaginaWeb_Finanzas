<?php

include('../configuration/conexion.php');
include('includes/header.php');
include('includes/navbar.php');

?>
<?php
    $req = $bdd->query('SELECT * FROM users WHERE id='.$_SESSION['id'].'');
    $data = $req->fetch();

    $nombre = $data['nombre'];
    $lastName = $data['lastName'];

?>
<!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Administración</h1>
                    </div>
                    
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Usuarios</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $connection = mysqli_connect("localhost", "root", "", "db");

                                            $query = "SELECT id FROM users ORDER BY id";
                                            $query_run = mysqli_query($connection, $query);

                                            $row = mysqli_num_rows($query_run);

                                            echo ''.$row.'';

                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Content Row -->

                    <!-- Content Row -->
                    
                    <p class="mb-4">Bienvenido(a), <?php echo $nombre.' '.$lastName?></p>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>