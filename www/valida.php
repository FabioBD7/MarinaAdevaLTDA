<?php
session_start();
include_once 'banco.php';
//confere se o vetor post esta vindo
//print_r($_POST);
echo "<br />";
//pega os valores dos campos
$usuario = $_POST['email'];
$senha = md5($_POST['senha']);
//consulta no banco
$resutado = $banco->query("SELECT * FROM usuario WHERE email = '$usuario' && senha = '$senha'   LIMIT 1");
//confere os atributos do resultado
//print_r($resutado );
//caso seja encontrada a linha do registro   
if($resutado->num_rows){
    echo "BEM VINDO!";
    while ($resu = $resutado->fetch_assoc()){
        $_SESSION[nome] = $resu['nome'];
        $_SESSION[id] = $resu['id'];
        header("Location: home.php");
    }
} ELSE{
    //caso usuario e senha não estejam corretos
    $_SESSION[errologin] = "e-mail ou senha incorretos";
        header("Location: index.php");
}


