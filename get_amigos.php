<?php

	session_start();

	//if(!isset($_SESSION['usuario'])){
	//	header('Location: index.php?erro=1');
	//}

	/* aqui irei pegar a lista de todas as pessoas do banco e imprimir na tela do navegador, cada li terá uma tag a que levara até o fedd da pessoa selecionada*/

	require_once('db.class.php');

	$nickname = $_SESSION['feedatual'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	$sql = "SELECT nickname FROM pessoa";
	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
			echo '
        <li style = "padding-top: 10px; "class = "list-group-item">
          <div style =" height: 90px;" class = "row" >
            <img style = "position: relative;  width:90px; heigth:120px;" src="img/facesimbol.png" class="img-circle imagensgeral">
            <h4 class = "titulogeral"><a class = "linkgeral" style = "top: -10px; " href="home.php?nick='.$registro['nickname'].'">'.$registro['nickname'].'</a></h4>
          </div>
        </li>
      ';

		}

	} else {
		echo 'Erro na consulta de tweets no banco de dados!';
	}

?>