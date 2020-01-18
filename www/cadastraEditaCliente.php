<?php
include 'banco.php';
print_r($_POST);
$banco->query("UPDATE usuario set perfil = '$_POST[perfil]' where id = '$_POST[id]'   ; ");  
