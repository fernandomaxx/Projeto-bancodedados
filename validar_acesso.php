<?php

	session_start();

	require_once('db.class.php');

	$usuario = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = " SELECT * FROM pessoa WHERE email = '$usuario' AND senha = '$senha' ";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['email'])){

			$_SESSION['email'] = $dados_usuario['email'];
			$_SESSION['senha'] = $dados_usuario['senha'];
			$_SESSION['usuario'] = $dados_usuario['nome'];
			$_SESSION['nickname'] = $dados_usuario['nickname'];
			
			header('Location: home.php?nick='.$_SESSION['nickname']);

		} else {
			header('Location: index.php?erro=1');
		}
	} else {
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}

?>