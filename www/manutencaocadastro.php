<?php
include 'banco.php';
//imprime o array do formulario
print_r ($_POST);

//insert no banco
$banco->query("INSERT INTO manutencao(tipo) VALUE ('$_POST[tipo]')");
?>