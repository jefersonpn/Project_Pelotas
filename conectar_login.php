<?php
	session_start();
	include('conectar.php');

	if(empty($_POST['login']) || empty($_POST['senha'])) {
		header('Location: index.php');
		exit();
	}

	$usuario = mysqli_real_escape_string($conectar, $_POST['login']);
	$senha = mysqli_real_escape_string($conectar, $_POST['senha']); /*sql injectino */

	$query = "select login_protetor from protetor where login_protetor = '{$usuario}' and senha = md5('{$senha}') ";

	$result = mysqli_query($conectar, $query);

	$row = mysqli_num_rows($result);

	if($row == 1) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
	} else if($row ==0){
		$query = "select id_doador from doador where login_doador = '{$usuario}' and senha = md5('{$senha}') ";
		
		$result = mysqli_query($conectar, $query);

		$row = mysqli_num_rows($result);
		
		if($row == 1){
			$_SESSION['usuario'] = $usuario;
			header('Location: index.php');
		}else if($row ==0){
			$query = "select id_parceiro from doador where login_parceiro = '{$usuario}' and senha = md5('{$senha}') ";
			
			$result = mysqli_query($conectar, $query);
	
			$row = mysqli_num_rows($result);
			
			if($row == 1){
				$_SESSION['usuario'] = $usuario;
				header('Location: index.php');
			}
	}else{
		session_destroy();
		header('Location: index.php');
	};

?>