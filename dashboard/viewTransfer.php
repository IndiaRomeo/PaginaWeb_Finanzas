<?php 
include('config/conexion.php');
include('includes/header.php');
include('includes/navbar.php');

?>

<!-- Begin Page Content -->
<div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Lista de Transferencias</h1>
                    <p class="mb-4">Transferencias registradas.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabla de transferencias</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <?php 
                                $connection = mysqli_connect("localhost", "root", "", "db");

                                $query = "SELECT * FROM transfers";
                                $query_run = mysqli_query($connection, $query);
                                
                                
                                
                                ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Id Usuario</th>
                                            <th>Enviado</th>
                                            <th>Saldo Transferido</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if(mysqli_num_rows($query_run) > 0){
                                            while($row = mysqli_fetch_assoc($query_run)){
                                                ?> 
                                        <tr>
                                            <td><?php   echo $row['idTransaction'];     ?></td>
                                            <td><?php   echo $row['idUserTransfer'];    ?></td>
                                            <td><?php   echo $row['nameTransfer'];      ?></td>
                                            <td>$ <?php   echo $row['newSaldo'];          ?> USD</td>
                                            <td><?php   echo $row['dateTransfer'];      ?></td>
                                        </tr>
                                        <?php
                                        }
                                        } else {
                                            echo "No hay ninguna transferencia registrada.";
                                        }
                                        ?>
                                    </tbody>
                                </table>
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