<?php

	session_start();

	//if(!isset($_SESSION['email'])){
	//	header('Location: index.php?erro=1');
	//}

	require_once('db.class.php');

	$texto_post = $_POST['texto_post'];
	$nickname = $_SESSION['feedatual'];
	$email = $_SESSION['email'];
	$nome = $_SESSION['logado'];
	//$id = 1;

	$sql = " SELECT idMural, fk_email FROM mural WHERE fk_nickname = '$nickname'";

	//echo "oiiiiii";
	//if($texto_post == '' || $nickname == ''){
	//	die();
	//}

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);
	
	$dados_usuario = mysqli_fetch_array($resultado_id);
	$id = $dados_usuario['idMural'];
	$email1 = $dados_usuario['fk_email'];

	$sql1 = " INSERT INTO postagem(nome, fk_email, fk_nickname, texto, fk_idMural)values('$nome','$email1', '$nickname', '$texto_post', $id) ";

	mysqli_query($link, $sql1);

?>