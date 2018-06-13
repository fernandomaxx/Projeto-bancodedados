<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FaCIbook</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                <button type="button" class="btn btn-primary btnNaveg"> <img src="img/ciufpb.png" class="img-circle imglinkcirculo"> Nome da Conta</button>
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
                <li> <a href="#">Sair</a> </li>
              </ul>
              </span>
          </div>
        </div>

      </div>
    </nav>
    
   	<div class="container">

   		<div class="col-md-4">
        <div class="row">
            <div class="well  wellGrupo">
            <img id="imgPerfilPrinc" src="img/facesimbol.png" class="img-thumbnail">
            <h4 style="text-align: center;">Nome Grupo</h4>
            
            <button style="margin-top: 46px;"type="button" class="btn-primary form-control" >Membros </button>
            
            </div>
        </div>
      </div>


      <div class="col-md-4">
          
        <div class="row parteMeioGrupo">
          
          <div class="postGrupo well">
            <div class="form-group">
            <input id = "textPost" type="text" class="form-control" placeholder="No que está Pensando?">
           <div style="margin-top: 6px;" class="custom-file">
                <label class="custom-file-label">Fotos e Vídeos</label>
                <input type="file" class="custom-file-input" id="customFileLang" lang="pt-br">
          </div>
            <button id="btnPostar" type="button" class="btn btn-primary"> Postar </button>
            </div>
          </div>

          <ul class="list-group listafeedGrupo">
              
              <li class="list-group-item">
                <img src="img/facesimbol.png" class="img-circle imgPerfilPost">
                <label>Arthur Lopes</label><br><br>
                <img src="img/paisagem.jpg" class="imgpost"><br><br>
                <button type="button" class="btn btn-default">Curtir</button>
                

                <!--BOTAO COMENTAR-->
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#janela">Comentar</button>

                <!--Janela-->
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
                </form><!--Fim Janela de comentario-->
              </li>
              
              <li href="#" class="list-group-item">Second item</li>
              <li href="#" class="list-group-item">Third item</li>
          </ul>


        </div>
        



      
        </div>

      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>