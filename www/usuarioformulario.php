<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Cadastro usuário</title>
  </head>
  <body>
<h1>Cadastro usuário</h1>
<p id="s" aria-live="assertive">
<form action="usuariocadastro.php" method="post" >
<div class="form-group">
<label for="nome">Nome:</label>
<input name="nome" id="nome" type="text" class="form-control" />
</div>
<div class="form-group">
<label for="email">E-mail:</label>
<input name="email" id="email" type="email" class="form-control" />
</div>
<div class="form-group">
<label for="tel">Tel:</label>
<input name="tel" id="tel" type="text" class="form-control" />
</div>
<div class="form-group">
<label for="senha">Entre com sua senha:</label>
<input name="senha" id="senha" type="password" class="form-control" />
</div>
<div class="form-group">
<label for="senhaConfirma">Confirme sua senha:</label>
<input name="senhaConfirma" id="senhaConfirma" type="password" class="form-control" />
</div>
<button type="submit" id="b" class="btn btn-primary">Cadastre</button>
</form>

    
<!-- arquivos js importantes -->
    <script src="js/jquery-3.4.1.js" ></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
        <script src="js/functions.js" ></script>
        <script>
        
        </script>
  </body>
</html>