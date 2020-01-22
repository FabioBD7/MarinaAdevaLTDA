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
<title>Portaldo  Cliente!</title>
</head>
<body>
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
<li><a href="sair.php">Sair</a></li>
 
</ul>
</nav>
</div>
<div class="col-8">
<h1 class="display-1">
Bem vindo <?php echo $_SESSION['nome'];?>!
</h1>
</div>
</div>

<form role="search">
<label for="p">Pesquisa</label>
<input type="search" name="p" id="p" />
<button type="submit">Pesquisar</button>
</form>
</header>

<main>
<h1 id="conteudo">Serviços para Você</h1>
<p>Gerencie suas embarcações</p>
<form method="post" action="formBarco.php" >
<?php
$tabela = $banco->query("SELECT * FROM embarcacao where dono = $_SESSION[id] ; ");

echo "<div>
<label for='barco'>Selecione a embarcação:</label>
<select name='barco' id='barco'  >
";
while($item = $tabela->fetch_assoc() ){
    echo "<option value='$item[id]'>$item[nome]</option>";
}

echo "</select>
    </div>";
?>

<button type="submit"  id="b"  class="btn btn-primary">Cadastra embarcação</button> 
</form>

</main>

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