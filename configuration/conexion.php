<?php
//Información BDD


$settings['host_bdd'] = 'localhost';//IP del host
$settings['user_bdd'] = 'root';//Nombre del puerto utilizado para la base de datos
$settings['mdp_bdd'] = '';//Contraseña para acceder a la base de datos
$settings['name_bdd'] = 'db';//Nombre de la base de datos

//Conexión a la BDD
try
  {
   $bdd = new PDO ('mysql:host='.$settings['host_bdd'].';dbname='.$settings['name_bdd'].'', $settings['user_bdd'], $settings['mdp_bdd'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }

  catch(Exception $e)
  {
   die('Error :'.$e->getMessage());
  }

  $connection = mysqli_connect("localhost", "root", "", "db");
?>