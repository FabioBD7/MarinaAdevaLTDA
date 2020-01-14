<?php   
session_start();

include_once 'banco.php';

print_r($_POST);
$data= $_POST['saidadata'] . ' ' . $_POST['saidahora'] ;
echo " <br /> $data";
$banco->query("INSERT INTO saida (barco, saida, obs) VALUE ('$_POST[barco]', '$data', '$_POST');");
