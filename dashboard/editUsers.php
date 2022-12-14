<?php 
include('includes/header.php');
include('includes/navbar.php');

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
                                <h1 class="h4 text-gray-900 mb-4">Panel de Edición del Usuario</h1>
                            </div>
                            <form class="user" action="code" method="POST">
                                <?php
                                $connection = mysqli_connect("localhost", "root", "", "db");

                                if(isset($_POST['editId'])){
                                    $id = $_POST['editId'];
                                
                                    $query = "SELECT * FROM users WHERE id='$id'";
                                    $query_run = mysqli_query($connection, $query);

                                    foreach($query_run as $row){
                                ?>
                                <input type="hidden" name="editId" value="<?php echo $row['id']?>">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" value="<?php echo $row['nombre'] ?>" name="editNombre" id="nombre" placeholder="Nombre" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" value="<?php echo $row['lastName'] ?>" name="editLastName" id="lastName" placeholder="Apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" value="<?php echo $row['email'] ?>" name="editEmail" id="email" placeholder="E-mail" required>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['documento'] ?>" name="editDocumento" id="documento" placeholder="Tipo de Documento" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" value="<?php echo $row['nDocumento'] ?>" name="editNDocumento" id="nDocumento" placeholder="N° de Documento" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" value="<?php echo $row['direccion'] ?>" name="editDireccion" id="direccion" placeholder="Dirección" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="number" class="form-control form-control-user" value="<?php echo $row['tiempo'] ?>" name="editTiempo" id="tiempo" placeholder="Tiempo de Residencia" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" value="<?php echo $row['estadoCivil'] ?>" name="EditEstadoCivil" id="estadoCivil" placeholder="Estado Civil" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" value="<?php echo $row['personas'] ?>" name="editPersonas" id="personas" placeholder="Personas a Cargo" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['prestamos'] ?>" name="editPrestamos" id="prestamos" placeholder="Prestamos Activos" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" value="<?php echo $row['trabaja'] ?>" name="editTrabaja" id="trabaja" placeholder="Trabaja Actual" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" value="<?php echo $row['salarioMensual'] ?>" name="editSalarioMensual" id="salarioMensual" placeholder="Salario Mensual" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['gastos'] ?>" name="editGastos" id="gastos" placeholder="Gastos Mensuales" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" value="<?php echo $row['motivo'] ?>" name="editMotivo" id="motivo" placeholder="Motivo de la Solicitud" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" value="<?php echo $row['monto'] ?>" name="editMonto" id="monto" placeholder="Monto a Solicitar" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['cuota'] ?>" name="editCuota" id="cuota" placeholder="Cuota Estimada" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" value="<?php echo $row['saldo'] ?>" name="editSaldo" id="saldo" placeholder="Saldo" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" value="<?php echo $row['cuenta'] ?>" name="editCuenta" id="cuenta" placeholder="Número de Cuenta" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['ruta'] ?>" name="editRuta" id="Ruta" placeholder="Número de Ruta" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" value="<?php echo $row['estado'] ?>" name="editEstado" id="estado" placeholder="Estado de la Cuenta" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" value="<?php echo $row['tipoCuenta'] ?>" name="editTipoCuenta" id="tipoCuenta" placeholder="Tipo de Cuenta" required>
                                    </div>
                                </div>
                                <?php 
                                    }
                                }

                                ?>
                                <button type="submit" name="btnGuardar" class="btn btn-primary btn-facebook btn-block" >Guardar</button>
                                <a href="listUsers" class="btn btn-primary btn-google btn-block" >Cancelar</a>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>