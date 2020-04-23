<?php
require_once('connectBDD.php');
$connexion = new Database('db5000303615.hosting-data.io', 'dbs296602', 'dbu526395', 'PaPef:5F');
$bdd = $connexion->PDOConnexion();

require_once('User.php');

$email = !empty($_POST['email']) ? $_POST['email'] : NULL;
$pass = !empty($_POST['pass']) ? $_POST['pass'] : NULL;



$user1 = new User($email, $pass);

$user1 -> connect($bdd);


?>
