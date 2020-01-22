<?php session_start();
if($_SESSION['perfil'] != 1) {header("location: index.php");}
include_once 'banco.php';  
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>Agendamento de saída</title>
  </head>
  <body>
<h1>Agende uma saída</h1>
<p id="s" aria-live="assertive">

<form method="post" action="cadastraSaida.php" >
<?php
$tabela = $banco->query("SELECT * FROM embarcacao where dono = $_SESSION[id] ; ");

echo "<div>
<label for='barco'>Selecione a embarca��o:</label>
<select name='barco' id='barco'  >
";
while($item = $tabela->fetch_assoc() ){
    echo "<option value='$item[id]'>$item[nome]</option>";
}

echo "</select>
    </div>";
?>
<div class="form-group">
<fieldset>
<legend>Agendamento saída </legend>
<label for="saidadata">Data (obrigatório):</label>
<input name="saidadata" id="saidadata" type="date" class="form-control" />

<label for="saidahora">Hora:</label>
<input name="saidahora" id="saidahora" type="time" class="form-control" />
</fieldset>
</div>

<div class="form-group">
<fieldset>
<legend>Data do retorno:</legend>
<label for="retornodata">Data:</label>
<input name="retornodata" id="retornodata" type="date" class="form-control" />

<label for="retornohora">Hora:</label>
<input name="retornohora" id="retornohora" type="time" class="form-control" />
</fieldset>
</div>
<div class="form-group">
<label for="observacao">Observações</label>
<textarea name="observacao" id="observacao" type="text" class="form-control" ></textarea>
</div>


<button type="submit"  id="b"  class="btn btn-primary">Agendar saída</button> 
</form>





    
<!-- arquivos js importantes -->
    <script src="js/jquery-3.4.1.js" ></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
        <script src="js/functions.js" ></script>
        <script>
        
        </script>
  </body>
</html>