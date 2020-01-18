<?php
$banco = new mysqli ("localhost","root","","marina");

function listaBanco($tabela ) {
    
    

    $saida = "";

    $saida .= "<ul class='list-unstyled'>";
    while ($registro = $tabela->fetch_assoc()) {
        $saida .= "<li>";
        foreach ($registro as $campo) {
            $saida .= " $campo ";
        }
        $saida .= "</li>";
    }
    $saida .= "</ul>";
    return  $saida;
}