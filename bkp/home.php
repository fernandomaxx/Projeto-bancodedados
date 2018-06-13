<?php
  
  session_start();

  if(!isset($_SESSION['email'])){
    header('Location: index.php?erro=1');
  }

  $_SESSION['feedatual'] = $_GET['nick'];
  echo $_SESSION['feedatual'];
  $_SESSION['logado'] = $_SESSION['nickname'];

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FaCIbook</title>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">

      $(document).ready( function(){

        //associar o evento de click ao botão
        $('#btn_postar').click( function(){

          if($('#texto_post').val().length > 0){
            alert($('#texto_post').val());
            $.ajax({
              url: 'inclui_post.php',
              method: 'post',
              data: {texto_post: $('#texto_post').val() },
              success: function(data) {
                $('#texto_post').val('');
                atualizaPost();
              }
            });
          }

        });

        $('#btn_allpessoas').click( function(){

            $.ajax({
              url: 'get_pessoas.php',
             // method: 'post',
              //data: {texto_post: $('#texto_post').val() },
              success: function(data) {
                $("#lista_resultados").modal();
                $('#lista_resultados_interna').html(data);
              }
            });

        });

        function atualizaPost(){
          //carregar os tweets 

          $.ajax({
            url: 'get_post.php',
            success: function(data) {
              $('#post').html(data);
            }
          });
        }

        atualizaPost();

      });

    </script>

  </head>
  <body>

    <!-- Barra navegação -->
    <nav class="navbar navbar-default">
      <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" 
                  data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">Alternar Menu</span>
          </button>
          <a href="#" class="navbar-brand"><img class="imgsimbolo" src="img/facesimbol.png"></a>
         
          
          
        </div>
        

        <div class="collapse navbar-collapse" id="barra-navegacao">

          <div class="nav navbar-nav navbar-right naveg-dentro">
             
              <a href="">  
                <button type="button" class="btn btn-primary btnNaveg"> <img src="img/ciufpb.png" class="img-circle imglinkcirculo"> <?= $_SESSION['usuario'] ?></button>
              </a>
             
              <a href="">
              <button type="button" class="btn btn-primary btnNaveg">Pagina Inicial</button>
              </a>
              
          
              <span class="glyphicon glyphicon-user dropdown"></span>
              <span class=" glyphicon glyphicon-globe"></span>
          
              
              <span class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
              </a> 
              <ul class="dropdown-menu">
                <li> <a href="sair.php">Sair</a> </li>
              </ul>
              </span>
          </div>
        </div>

      </div>
    </nav>
    
   	<div class="container">

   		<div class="col-md-4">
        <div style="width: 500px;" class="row">
            <div class="well">
            <img id="imgTPrinc" src="img/ciufpb.png" class="img-circle">
            <h4 style="text-align: center;"><?= $_SESSION['usuario'] ?></h4>
            <button style="margin-top: 36px;"type="button" class="btn-primary form-control" >Grupos </button>
            <button style="margin-top: 16px;"type="button" class="btn-primary form-control" >Amigos </button>
            <button style="margin-top: 36px;"type="button" class="btn-primary form-control" >allGrupos </button>
            <button  style="margin-top: 16px;"type="button" class="btn-primary form-control" >allPessoas </button>
            </div>
        </div>
      </div>

      <div id="lista_resultados" class="modal fade">
          <div  class="modal-dialog">
            <div  class="modal-dialog">
              <div id="lista_resultados_interna" class="modal-content"><!--Conteudo da Janela-->
                      <div class="modal-header">
                        
                      </div>    

                    </div>'
            </div>
          </div>
      </div>

      <div class="col-md-4">
              <!-- Criação das abas -->
      <!-- <ul class="nav nav-pills" role="tablist"> -->
      <ul class="nav nav-tabs abasperfil" role="tablist">
        <li class="active"><a href="#info" role="tab" data-toggle="tab">Linha do Tempo</a></li>
        <li><a id="btn_allpessoas" href="#avaliacoes" role="tab" data-toggle="tab">Amigos</a></li>
        <li><a href="#grupo" role="tab" data-toggle="tab">Grupos</a></li>
      </ul>

      <!-- Conteúdo das abas -->
      <div class="tab-content">

        <!-- aba informações -->
        <div class="tab-pane active" role="tabpanel" id="info">

          <div class="row">
            
            <div class="post well">
              <form id="form_post" class="form-group">
              <input id = "texto_post" type="text" class="form-control" placeholder="No que está Pensando?">
             <div style="margin-top: 6px;" class="custom-file">
                  <label class="custom-file-label">Fotos e Vídeos</label>
                  <input type="file" class="custom-file-input" id="customFileLang" lang="pt-br">
            </div>
              <button id="btn_postar" type="button" class="btn btn-primary"> Postar </button>
              </form>
            </div>

            <ul id="post" class="list-group listafeed">

            </ul>
          </div>
        </div>

        <!-- aba Avaliações -->
        <div class="tab-pane" role="tabpanel" id="avaliacoes">
        
          
        </div>

        <!-- aba Compre também -->
        <div class="tab-pane" role="tabpanel" id="grupo">


          
        </div>


      </div>
        </div>
        
      </div>
        
      </div>
   			
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>