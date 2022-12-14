<?php
include 'config/conexion.php';
include('includes/header.php');
include('includes/navbar.php');
function generate_string() {
    $strength = 8;
    $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}

if (isset($_POST['btnTransfer'])) {
    $idUserTransfer = $_POST['idUserTransfer'];
    $enviado = $_POST['nameTransfer'];
    $newSaldo = $_POST['newSaldo'];
    $dateTransfer = date('Y-m-d', strtotime($_POST['dateTransfer']));
    $code = $_POST['code'];

    if($_POST['idUserTransfer'] == ' ' || $_POST['nameTransfer'] == ' ' || $_POST['newSaldo'] == ' ' || $_POST['dateTransfer'] == ' ' || $_POST['code'] == ' '){
        echo '<META HTTP-EQUIV="Refresh" CONTENT="0.5; URL=transfers">';
        $errorCampos = '<div class="container mt-3">
        <div class="alert alert-danger">
        <center>¡Ups! Debes completar todos los campos.</center>
        </div>
        </div>';
    } else {
        $query = "INSERT INTO transfers (idUserTransfer, nameTransfer, newSaldo, dateTransfer, code) VALUES ('$idUserTransfer', '$enviado', '$newSaldo', '$dateTransfer', '$code')";
        $query_run = mysqli_query($connection, $query);

        if($query_run){
            echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=transfers">';
            $validacion = '<div class="container mt-3">
            <div class="alert alert-success">
            <center>¡Felicitaciones! transferencia exitosa.</center>
            </div>';
        } else {
            echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=transfers">';
            $errorTransfer = '<div class="container mt-3">
            <div class="alert alert-danger">
            <center>¡Ups! Ha ocurrido un error.</center>
            </div>
            </div>';
        }
    }
}

?>

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-4">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">¡Transferir Dinero!</h1>
                            <p>Seleccione al usuario y rellene los campos para hacer la transferencia.</p>
                        </div>
                        <?php 
                            if(isset($errorCampos)){
                                echo $errorCampos;
                            }
                            if(isset($validacion)){
                                echo $validacion;
                            }
                            if(isset($errorTransfer)){
                                echo $errorTransfer;
                            }
                        ?>
                        <form class="user" action="#ins" method="POST">
                            <div class="form-group">
                                <select name="idUserTransfer" id="idUserTransfer" class="form-control">
                                    <option value="">Seleccione usuario</option>
                                    <?php
                                    $query = "SELECT * FROM users order by id";
                                    $query_run = mysqli_query($connection, $query);

                                    while($row = mysqli_fetch_array($query_run)){
                                        $id = $row['id'];
                                        $nombre = $row['nombre'];
                                        $lastName = $row['lastName'];
                                    ?>
                                    <option value="<?php echo $id; ?>"><?php echo $nombre.' '.$lastName ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nameTransfer" id="nameTransfer" placeholder="¿Quién envía?" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="newSaldo" id="newSaldo" placeholder="$ Saldo USD" required>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="dateTransfer" id="dateTransfer" required>
                            </div>
                            <div class="form-group">
                                <!-- <center><p class="form control"><?php echo generate_string()?></p></center> -->
                                <input class="form-control" name="code" id="code" value="<?php echo generate_string()?>" readonly>
                            </div>
                            <button type="submit" name="btnTransfer" class="btn btn-success btn-block" >¡Transferir!</button>
                            <a href="viewTransfer" class="btn btn-info btn-block">Lista de Transferencias</a>
                        </form>
                    </div>
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