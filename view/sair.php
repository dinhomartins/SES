<?php 
    session_start();

unset($_SESSION['usuNome']);
unset($_SESSION['usuTipo']);
header('Location: ..\index.php');

?>