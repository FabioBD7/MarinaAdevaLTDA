<?php
session_start();
include_once 'banco.php';
//confere se o vetor post está vindo
//print_r($_POST);
echo "<br />";
//pega os valores dos campos
$usuario = $_POST['email'];
$senha = md5($_POST['senha']);
$perfil = $_POST['perfil'];
//consulta no banco
$resutado = $banco->query("SELECT * FROM usuario WHERE email = '$usuario' && senha = '$senha' LIMIT 1");
//confere os atributos do resultado
//print_r($resutado );
//caso seja encontrada a linha do registro   
if($resutado->num_rows){
	echo "Seja bem vindo!";
	while ($resu = $resutado->fetch_assoc()){
		$_SESSION[nome] = $resu['nome'];
		$_SESSION[id] = $resu['id'];
		$_SESSION[perfil] = $resu['perfil'];
		}
	if ($_SESSION[perfil] == "1"){
		header("location: cliente.php");
		}
	if ($_SESSION[perfil] == "2"){
		header("location: secretario.php");
		}
	if ($_SESSION[perfil] == "3"){
		header("location: mecanico.php");
		}
	if ($_SESSION[perfil] == "4"){
		header("location: pratico.php");
		}
	} ELSE {
	//caso usuário e senha não estejam corretos
		$_SESSION[errologin] = "e-mail ou senha incorretos.";
		header("location: index.php");
		}



?>