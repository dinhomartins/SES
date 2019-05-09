<?php 

require_once('dao/sql.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$user = new Sql();

$resultado = $user->query('SELECT * FROM USERS');

while ($results = $resultado->fetch(PDO::FETCH_ASSOC)) {
	
	session_start();
	$_SESSION['usuNome'] = $results['usuNome'];
	$_SESSION['usuSenha'] = $results['usuSenha'];
	$_SESSION['usuTipo'] = $results['usuTipo'];

	if($_SESSION['usuNome'] == $usuario && $_SESSION['usuSenha'] == $senha)  {
		header('Location: view\home.php');
	}else{
		?>
			<script type="text/javascript">
				alert("usuario não encontrado");
				cadastro.email.focus();
			</script>
		<?php
	}
}

 ?>