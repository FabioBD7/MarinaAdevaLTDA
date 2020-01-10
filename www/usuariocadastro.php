<?php
include 'banco.php';
//imprime o array do formulario
print_r ($_POST);
echo "<br />";

//criptografa senha
$x =md5($_POST['senha']);

//insert no banco
$banco->query("INSERT INTO usuario(nome,email, tel, senha, data_inscricao) VALUE ('$_POST[nome] ','$_POST[email]','$_POST[tel]','$x', NOW())");

// passa para variavel usuario o conteudo da tabela usuario do banco
$usuarios = $banco->query("SELECT * FROM usuario");


//usa o while como no exemplo dos cursos    
//usa foreach  em cada array da linha da tabela como no exemplo da corrida

echo "<table>";
while ($usuario= $usuarios->fetch_assoc()){
    echo "<tr>";
    foreach ($usuario as $campo){
        echo "<th>$campo </th>";
    }
    echo "</tr>";
}
echo "</table>";

