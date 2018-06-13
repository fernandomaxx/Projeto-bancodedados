<?php

	session_start();

	//if(!isset($_SESSION['usuario'])){
	//	header('Location: index.php?erro=1');
	//}

	require_once('db.class.php');

	$nickname = $_SESSION['feedatual'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	$sql1 = "SELECT idMural FROM mural WHERE fk_nickname = '$nickname' ";
	$resultado_id = mysqli_query($link, $sql1);
	$dados = mysqli_fetch_array($resultado_id);
	$idMural = $dados['idMural'];

	$sql = " SELECT * FROM postagem JOIN mural ON (mural.idMural = postagem.fk_idMural) ";
	$sql.= " WHERE idMural = $idMural";

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
			echo '<li class="list-group-item" style="margin-top: 10px;">';
			echo '<a href="#" class="list-group-item">';
				echo '<h4 class="list-group-item-heading">'.$registro['nome'].'</h4>';
				echo '<p class="list-group-item-text">'.$registro['texto'].'</p><br><br>';
				echo '<img src="img/facesimbol.png"><br><br>';
			echo '</a>';
			echo '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#janela">Comentar</button>';

			echo '

				<form class="modal fade" id="janela">
                  <div class="modal-dialog">
                    <div class="modal-content"><!--Conteudo da Janela-->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                        <h4 class="modal-title">
                          Comentários
                        </h4>
                      </div>   

                       <div class="modal-body">
                        <div class="form-group">
                          <input type="text" class="form-control" id="comentario" placeholder="Digite seu comentário">
                        </div>

                      </div>  

                       <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                          Comentar
                        </button>
                        
                        <button type="button" class="btn btn-default"data-dismiss="modal">
                          Cancelar
                        </button>
                      </div>    

                    </div>
                    </div>
                </form>';
			echo '</li>';
		}

	} else {
		echo 'Erro na consulta de tweets no banco de dados!';
	}

?>