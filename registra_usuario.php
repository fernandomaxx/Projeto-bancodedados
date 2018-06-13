<?php

	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$nick = $_POST['nick'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$sexo = $_POST['sexo'];
	$nasc = $_POST['nasc'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

/*
	//verificar se o usuário já
	$sql = " select * from usuarios where usuario = '$usuario' ";
	if($resultado_id = mysqli_query($link, $sql)) {

		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){
			$usuario_existe = true;
		}
	} else {
		echo 'Erro ao tentar localizar o registro de usuário';
	}

	//verificar se o e-mail já
	$sql = " select * from usuarios where email = '$email' ";
	if($resultado_id = mysqli_query($link, $sql)) {

		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['email'])){
			$email_existe = true;
		} 
	} else {
		echo 'Erro ao tentar localizar o registro de email';
	}


	if($usuario_existe || $email_existe){

		$retorno_get = '';

		if($usuario_existe){
			$retorno_get.= "erro_usuario=1&";
		}

		if($email_existe){
			$retorno_get.= "erro_email=1&";
		}

		header('Location: inscrevase.php?'.$retorno_get);
		die();
	}*/
	$sql = " insert into pessoa(nome, email, senha, sexo, dataNascimento, nickname) values ('$usuario', '$email', '$senha', $sexo, $nasc, '$nick') ";
	echo $sql;
	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}

	$sql1 = "insert into mural(fk_email, fk_nickname) values ('$email', '$nick') ";

	if(mysqli_query($link, $sql1)){
		echo 'mural registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o mural!';
	}

?>