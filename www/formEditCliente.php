<?php
session_start();
include_once 'banco.php';
$perfil = $banco->query("SELECT * FROM perfil ; ");
$usuario = $banco->query("SELECT * FROM usuario where id = '$_POST[usu]';");
//print_r($usuario);
while ($campo = $usuario->fetch_assoc()){
    



?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Editar usuário</title>
  </head>
  <body>
<h1>Editar usuário</h1>
<p id="s" aria-live="assertive">
<form action="cadastraEditaCliente.php" method="post" >

<div class="form-group">
<label for="id">id:</label>
<input name="id" id="id" type="text" class="form-control" value="<?php echo "$campo[id]"; ?>" readonly="readonly" />
</div>

<div class="form-group">
<label for="nome">Nome:</label>
<input name="nome" id="nome" type="text" class="form-control" value="<?php echo "$campo[nome]"; ?>" readonly="readonly" />
</div>
<div class="form-group">
<label for="email">E-mail:</label>
<input name="email" id="email" type="email" class="form-control" value="<?php echo "$campo[email]"; ?>" />
</div>
<div class="form-group">
<label for="tel">Tel:</label>
<input name="tel" id="tel" type="text" class="form-control" value="<?php echo "$campo[tel]"; ?>" />
</div>

<?php
}

echo "<div>
<label for='perfil'>Perfil</label>
<select name='perfil' id='perfil' selected='$campo[perfil]' >
";
while($item = $perfil->fetch_assoc() ){
    echo "<option value='$item[id]'>$item[perfil]</option>";
}

echo "</select>
    </div>";

?>

<button type="submit" id="b" class="btn btn-primary">Executar</button>
</form>

    
<!-- arquivos js importantes -->
    <script src="js/jquery-3.4.1.js" ></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
        <script src="js/functions.js" ></script>
        <script>
        
        </script>
  </body>
</html>