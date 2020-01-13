<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
    <title>cadastra embarcação</title>
  </head>
  <body>
<h1>Cadastre sua embarcação</h1>
<p id="s" aria-live="assertive">
<form>
<div class="form-group">
<label for="nome">Nome:</label>
<input name="nome" id="nome" type="text" class="form-control" />
</div>
<div class="form-group">
<label for="modelo">Modelo/fabricante</label>
<input name="modelo" id="modelo" type="text" class="form-control" />
</div>
<div>

<label for="tipo">Tipo de embarcação</label>
<select name="tipo" id="tipo">
<option value="Lancha">Lancha</option>
<option value="Veleiro">Veleiro</option>
<option value="Escuna">Escuna</option>
<option value="Pesqueiro">Pesqueiro</option>
<option value="Trawler">Trawler</option>
<option value="Catamar├ú">Catamar?򼯯ption>
<option value="Iate">Iate</option>
<option value="Jet-Ski">Jet-Ski</option>
<option value="Jet Boat">Jet Boat</option>
<option value="Caiaque">Caiaque</option>
<option value="Caiaque">Caiaque</option>
<option value="Prancha de surf/windsurf">Prancha de surf/windsurf</option>
<option value="outro">outro</option>

</select>
</div>
<div class="form-group">
<label for="tamanho">tamanho</label>
<input name="tamanho" id="tamanho" type="number" class="form-control" />
</div>
<div class="form-group">
<label for="num_passageiros">Número de passageiros:</label>
<input name="num_passageiros" id="num_passageiros" type="number" class="form-control" />
</div>
<div class="form-group">
<label for="capacidade_tanque">Capacidade do tanque de combustivel:</label />
<input name="capacidade_tanque" id="capacidade_tanque" type="number" class="form-control" >
</div>
<div class="form-group">
<label for="observacao">Observações</label>
<textarea name="observacao" id="observacao" type="text" class="form-control" ></textarea>
</div>
<div class="form-group">
<label for="n1">data</label>
<input name="n1" id="n1" type="date" class="form-control" />
</div>
<button type="button" id="b" class="btn btn-primary">Executar</button>
</form>

    
<!-- arquivos js importantes -->
    <script src="js/jquery-3.4.1.js" ></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
        <script src="js/functions.js" ></script>
        <script>
        
        </script>
  </body>
</html>