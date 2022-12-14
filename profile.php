<?php
session_start();
error_reporting(0);
include('configuration/conexion.php');
include('includes/header.php');
include('includes/navbar.php');


    $req2 = $bdd->query('SELECT * FROM transfers WHERE idUserTransfer='.$_SESSION['id'].'');
    $data2 = $req2->fetch(PDO::FETCH_ASSOC);
    $newSaldo = $data2['newSaldo'];

    $req = $bdd->query('SELECT * FROM users WHERE id='.$_SESSION['id'].'');
    $data = $req->fetch();

    $nombre = $data['nombre'];
    $lastname = $data['lastName'];
    $email = $data['email'];
    $documento = $data['documento'];
    $nDocumento = $data['nDocumento'];
    $direccion = $data['direccion'];
    $tiempo = $data['tiempo'];
    $estadoCivil = $data['estadoCivil'];
    $personas = $data['personas'];
    $prestamos = $data['prestamos'];
    $trabaja = $data['trabaja'];
    $salarioMensual = $data['salarioMensual'];
    $gastos = $data['gastos'];
    $motivo = $data['motivo'];
    $monto = $data['monto'];
    $cuota = $data['cuota'];
    $saldo = $data['saldo'];
    $cuenta = $data['cuenta'];
    $ruta = $data['ruta'];
    $estado = $data['estado'];
    $tipoCuenta = $data['tipoCuenta'];
                            
                    

?>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5">
        <div class="container">
            <h1 class="display-3 mb-4">Perfil</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Mi cuenta</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Perfil</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Page Header End -->

    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-5">Bienvenido(a) <?php echo $nombre.' '.$lastname ?>.
                    </h1>
                    <h4><?php echo $documento.' '.$nDocumento ?></h4>
                    <hr></hr>
                    <br/>
                    <h1 class="display-4">$ <?php echo $saldo-$newSaldo ?> USD.</h1>
                    <b><p style="color: green;">Saldo disponible</p></b>
                    <hr></hr>

                
                    <div class="border rounded p-2">
                        <p><font color="#011A41"><b>Tipo de cuenta: </font></b><?php echo $tipoCuenta ?></p>
                        <p><font color="#011A41"><b>Estado de la cuenta: </font></b><?php echo $estado ?></p>
                        <hr class="w-25 mx-auto mb-0"></hr>
                        <br/>
                        <p><font color="#011A41"><b>Número de cuenta: </font></b><?php echo $cuenta?></p>
                        <p><font color="#011A41"><b>Número de ruta: </font></b><?php echo $ruta?></p>
                        <p style="color: green;">Utilice el número de ruta para solicitar cheques, configurar depósitos directos y pagos salientes hacia otras instituciones financieras.</p>
                    </div>
                
                <div class="testimonial-item">
                    <div class="border rounded p-2">
                    <p><font color="#011A41"><b>Dirección: </font></b><?php echo $direccion ?></p>
                    <p><font color="#011A41"><b>Correo electrónico: </font></b><?php echo $email ?></p>
                    <p><font color="#011A41"><b>Tiempo de residencia: </font></b><?php echo $tiempo ?></p>
                    <p><font color="#011A41"><b>Estado civil: </font></b><?php echo $estadoCivil ?></p>
                    <p><font color="#011A41"><b>Personas a cargo: </font></b><?php echo $personas ?></p>
                    <hr class="w-25 mx-auto mb-0"></hr>
                    <br/>
                    <p><font color="#011A41"><b>Trabajo actual: </font></b><?php echo $trabaja ?></p>
                    <p><font color="#011A41"><b>Salario mensual: </font></b><?php echo $salarioMensual ?> USD</p>
                    <p><font color="#011A41"><b>Gastos mensuales: </font></b><?php echo $gastos ?> USD</p>
                    <hr class="w-25 mx-auto mb-0"></hr>
                    <br/>
                    <p><font color="#011A41"><b>Motivo Solicitud: </font></b><?php echo $motivo ?></p>
                    <p><font color="#011A41"><b>Monto Solicitado: </font></b><?php echo $monto ?> USD</p>
                    <p><font color="#011A41"><b>Cuota: </font></b><?php echo $cuota ?> USD</p>
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