<?php 

require_once('dao/sql.php');
require_once('dao/usuarioDAO.class.php');
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$user = new Sql();

$resultado = $user->validaLogin($usuario, $senha );



 ?>