<?php

	session_start();

	//if(!isset($_SESSION['usuario'])){
	//	header('Location: index.php?erro=1');
	//}

	require_once('db.class.php');

	$nickname = $_SESSION['feedatual'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	$sql = "SELECT nickname FROM pessoa";
	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
			echo '
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>

                        <div class="modal-body">
                        <div class="container">
                        	<div class="row">
                        	<label>Arthur Lopes</label><br><br>
                			       <div style="width:350px; heigth:350px;class="thumbnail">
                               <img style="width:50px; heigth:50px;" src="img/facesimbol.png" alt="Imagem como Thumbnail">
                               <div class="caption">
                                 <p>Legenda da Foto</p>
                               </div>
                              </div>
                        	</div>
                          
                        </div>

                      </div> ';

                        /*
                        <h4 class="modal-title">
                          '.$registro['nickname'].'
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
                        </button>';*/
		}

	} else {
		echo 'Erro na consulta de tweets no banco de dados!';
	}

?>