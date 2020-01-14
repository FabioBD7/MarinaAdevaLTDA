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
    <title>cadastra embarcação</title>
  </head>
  <header>
<a href="#menu" accesskey="1">Ir para o menu</a>
<a href="#conteudo" accesskey="2">Ir para o conteudo</a>
<a href="#rodape" accesskey="3">Ir para o Rodapé</a>
<img src="logotipo.jpg" alt="logotipo da Marina ADEVA LTDA" />

<div class="row">
<div class="col-4">
<nav>
<ul class="list-unstyled"">

<li><a href="formBarco.php">Cadastre sua embarcação</a></li>
<li><a href="formSaida.php">Agende uma saída</a></li>
<li><a href="">link</a></li>
<li><a href=""></a>link</li>
<li><a href="">link</a></li>
<li><a href="index.php">Sair</a></li>
 
</ul>
</nav>
</div>
<div class="col-8">
<h1 class="display-1">
Cadastre ~suas embarcações <?php echo $_SESSION['nome'];?>!
</h1>
</div>
</div>

<form role="search">
<label for="p">Pesquisa</label>
<input type="search" name="p" id="p" />
<button type="submit">Pesquisar</button>
</form>
</header>

<body>
<h2>Cadastro de Embarcações</h2>
<p id="s" aria-live="assertive">
<form action="cadastraBarco.php" method="post" >
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

<button type="submit" id="b" class="btn btn-primary">Cadastre!</button>
</form>

<footer id="rodape">
<address>
Marina ADEVA LTDA<br />
Alameda Vilarejo, 99, Jardim Arpuador, Navegantes - SP.<br />
Tel.: (13) 4444-5555<br />
<a href="#topo" accesskey="0">Ir para o topo"</a>
</address>
</footer>

<!-- arquivos js importantes -->
    <script src="js/jquery-3.4.1.js" ></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
        <script src="js/functions.js" ></script>

</body>
</html>