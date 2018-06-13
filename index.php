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
  <body class="fundo">

    <!-- Barra navegação -->
    <nav class="navbar navbar-default">
      <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" 
                  data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">Alternar Menu</span>
          </button>
          <a href="#" class="navbar-brand"><img class="imagemlogo" src="img/faceLogo.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="barra-navegacao">

          <form  method="post" action="validar_acesso.php" class="navbar-right login">
             
             <label>Login</label>
             <input class="carai" type="email" name="email"  >
             <label> Senha</label>
             <input class="carai" type="password" name="senha">
             <button id="btnlogin" type="submit" class="btn btn-primary">Entrar</button>
             
          </form>
        </div>

      </div>
    </nav>
    
   	<div class="container">

   		
   			<div class="row">
          <div class="col-md-6">

            <img id="ci" src="img/ciufpb.png">

          </div>
        

        <div class="col-md-5 pull-right">
          <h3 class="fonte">Faça uma Conta, é grátis.</h3>
          <form method="post" action="registra_usuario.php" id="formCadastrarse">
                
            <div class="form-group">

                <input type="text" id="usuario" name="usuario" placeholder="Digite o seu nome" class="form-control">

            </div>

            <div class="form-group">

                 <input type="text" id="nick" name="nick" placeholder="Digite o seu nick" class="form-control">
                
            </div>

            <div class="form-group">
              <input type="email" id="email" name="email" placeholder="Digite o seu email" class="form-control">
            </div>

            <div class="form-group">
              <input type="password" id="senha" name="senha" placeholder="Digite uma senha" class="form-control">
            </div>

             <div class="form-group">
              <input type="password" placeholder="Digite novamente sua senha" class="form-control">
            </div>

            <div class="radio">
              
              <label>
                <input type="radio" id="sexo" name ="sexo" value="'M'"> Masculino
              </label> 

              <label>
                <input type="radio" id="sexo" name ="sexo" value="'F'"> Feminino
              </label> 
              
            </div>

            <div>
              
                <div class="form-group">
                  <label id="dnasc">Data de Nascimento</label>
                  <input type="date" id="nasc" name="nasc" class="form-control" placeholder="Data de Nascimento">
                </div>
    
            </div>
            
            
                
                <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>

        </div>
              
        



        </div>
   		
      
   	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>