<?php   
session_start();
if($_SESSION['perfil'] != 1) {header("location: index.php");}
include_once 'banco.php';

print_r($_POST);