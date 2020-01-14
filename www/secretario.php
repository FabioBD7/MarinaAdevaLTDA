<?php session_start();
if($_SESSION['perfil'] != 2) {header("location: index.php");}
include 'banco.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<title>Perfil Secretário</title>
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

<li><a href="">link</a></li>
<li><a href="">link</a></li>
<li><a href="">link</a></li>
<li><a href=""></a>link</li>
<li><a href="">link</a></li>
<li><a href="sair.php">Sair</a></li>
 
</ul>
</nav>
</div>
<div class="col-8">
<h1 class="display-1">
<?php echo $_SESSION['nome']; ?>
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
<h1 id="conteudo">Catálogo de Embarcações</h1>
<p>Consulte/gerencie o catálogo de embarcaçõesda Marina ADEVA LTDA!</p>

<?php Lista("select * from embarcacao ") ?>

</main>
<footer id="rodape">
<address>


</address>
</footer>

<!-- arquivos js importantes -->
<script src="js/jquery-3.4.1.js" ></script>
<script src="js/bootstrap.bundle.min.js" ></script>
<script src="js/functions.js" ></script>

</body>
</html>