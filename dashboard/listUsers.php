<?php
include('config/conexion.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Begin Page Content -->
<div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Lista de Usuarios</h1>
                    <p class="mb-4">Usuarios registrados.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabla de Usuarios</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <?php 
                                $connection = mysqli_connect("localhost", "root", "", "db");

                                $query = "SELECT * FROM users";
                                $query_run = mysqli_query($connection, $query);
                                
                                
                                
                                ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>N° Documento</th>
                                            <th>Tipo Documento</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Dirección</th>
                                            <th>Tiempo Residencia</th>
                                            <th>Saldo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Estado</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if(mysqli_num_rows($query_run) > 0){
                                            while($row = mysqli_fetch_assoc($query_run)){
                                                ?> 
                                        <tr>
                                            <td><?php   echo $row['id'];            ?></td>
                                            <td><?php   echo $row['nDocumento'];    ?></td>
                                            <td><?php   echo $row['documento'];     ?></td>
                                            <td><?php   echo $row['nombre'];        ?></td>
                                            <td><?php   echo $row['lastName'];      ?></td>
                                            <td><?php   echo $row['direccion'];     ?></td>
                                            <td><?php   echo $row['tiempo'];        ?> Años</td>
                                            <td>$ <?php   echo $row['saldo'];       ?> USD</td>
                                            <td><?php   echo $row['estado'];        ?></td>
                                            <td>
                                            <div class="form-group row">
                                            <div class="col-sm-4">
                                            <a href="viewUser?id=<?=$row['id'];?>" class="btn btn-info btn-circle btn-sm" title="Ver Usuario"><i class="fas fa-info-circle"></i></a>
                                            </div>
                                            <div class="col-sm-4">
                                            <form class="" action="editUsers" method="POST">
                                                <input type="hidden" name="editId" value="<?php echo $row['id']; ?>">
                                                <button class="btn btn-warning btn-circle btn-sm" title="Editar Usuario"><i class="fas fa-cog"></i></button>
                                            </form>
                                            </div>
                                            <div class="col-sm-5">
                                            <form class="" action="code" method="POST">
                                                <input type="hidden" name="deleteId" value="<?php echo $row['id']; ?>">
                                                <button class="btn btn-danger btn-circle btn-sm" name="btnDelete" title="Editar Usuario"><i class="fas fa-trash"></i></button>
                                            </form>
                                            </div>
                                            </div>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        } else {
                                            echo "No hay ningún usuario registrado";
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