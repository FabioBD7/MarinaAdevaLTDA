<?php session_start();
if($_SESSION['perfil'] != 1) {header("location: index.php");}
include_once 'banco.php';
print_r($_POST);

 $banco->query("INSERT INTO embarcacao (dono, nome, modelo, tipo, tamanho, num_passageiros, capacidade_tanque, observacao) VALUE ('$_SESSION[id]', '$_POST[nome]', '$_POST[modelo]', '$_POST[tipo]', '$_POST[tamanho]', '$_POST[num_passageiros]', '$_POST[capacidade_tanque]', '$_POST[observacao]'); ");
echo "<br />";
header("location: cliente.php");
