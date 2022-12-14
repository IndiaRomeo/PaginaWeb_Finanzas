<?php
session_start();
include('configuration/conexion.php');
include('includes/header.php');
include('includes/navbar.php');

?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5">
        <div class="container">
            <h1 class="display-3 mb-4">Transferencias</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Mi cuenta</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transferencias</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Page Header End -->

<!-- 404 Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <h4>Tus transferencias</h4>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <?php
            $query = 'SELECT * FROM transfers t INNER JOIN users u ON t.idUserTransfer = u.id WHERE u.id='.$_SESSION['id'].'';
            $query_run = mysqli_query($connection, $query);

            if(mysqli_num_rows($query_run) > 0){
            while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <div class="border rounded p-2">
                <p style="color: #011A41;">&nbsp; Enviado por <b><?php echo $row['nameTransfer']; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['newSaldo'] ?> USD</p>
                <p style="color: #011A41; font-size: 70%;">&nbsp;&nbsp;<i class="fas fa-check"></i> RECIBIDO - Código: <?php echo $row['code'] ?></p>
                <p style="color: #011A41;">&nbsp; ENVIADO EL <b><?php echo $row['dateTransfer'] ?></b></p>
            </div>
            <br/>
            <?php
            }
        } else {
            echo '<div class="border rounded p-2">
            <center><h4>Todavía no hay transferencias</h4></center>
            <p style="color: #011A41;" align="center">Una vez que te envíen dinero, te mostraremos una lista detallada de las transferencias.</p>
            </div>';
        }
            ?>
        </div>
    </div>
</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>