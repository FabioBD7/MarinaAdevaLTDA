﻿<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<title>Marina ADEVA LTDA</title>
</head>
<body>
<header>
<a href="#menu" accesskey="1">Ir para o menu</a>
<a href="#conteudo" accesskey="2">Ir para o conteudo</a>
<a href="#rodape" accesskey="3">Ir para o Rodapé</a>
<img src="logotipo.jpg" alt="logotipo da Marina ADEVA LTDA" />
<nav id="menu">


</nav>

</header>
<main>
<h1 id="conteudo">Página Inicial</h1>
<p>Seja bem vindo ao portal online da Marina ADEVA LTDA!</p>
<h2>Faça seu Login</h2>
<form action="valida.php" method="post" >
<div class="form-group">
<label for="email">E-mail:</label>
<input name="email" id="email" type="email" class="form-control" />
</div>
<div class="form-group">
<label for="senha">Entre com sua senha:</label>
<input name="senha" id="senha" type="password" class="form-control" />
</div>
<button type="submit" id="b" class="btn btn-primary">Entrar</button>
</form>
<p id="s" aria-live="assertive">
 <?php
 if(isset($_SESSION['errologin'])){
 echo "$_SESSION[errologin]";
 unset($_SESSION['errologin']);
 }
 ?>
 </p>

<a href="usuarioformulario.php">Cadastre-se</a>
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