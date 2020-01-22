<?php
session_start();
if($_SESSION['perfil'] != 4) {header("location: index.php");}
include_once 'banco.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<title>Cadastro de manutenção</title>
  </head>
  <body>
<h1>Cadastro de Manutenção</h1>
<div class="form-group>
<form method="POST" action="manutencaocadastro.php">
<label for="tipo">Tipo de Manutenção</label>
<select name="tipo" id="tipo">
<option value="de saida">Saída</option>
<option value="rotina">Rotina</option>
<option value="avaria">Avaria</option>
</select>
</div>
<button type="button" id="b" class="btn btn-primary">Executar</button>
</form>

    <!-- arquivos js importantes -->
    <script src="js/jquery-3.4.1.js" ></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
        <script src="js/functions.js" ></script>

</body>
</html>