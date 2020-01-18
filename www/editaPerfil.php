<?php
include 'banco.php';

$usuarios = $banco->query("select  id, nome,email from usuario;");

echo "<form action='formEditCliente.php' method='post' >";
echo "<fildset>";
echo "<legend>Usuarios</legend>";
while ($registro = $usuarios->fetch_assoc()) {
    echo "<br /> <label for='$registro[id]'>$registro[id] $registro[nome] $registro[email]  </label>";
    echo " <input type='radio' name='usu' id='$registro[id]' value='$registro[id]' / >";
}
 echo "</fildset>";
echo "<button type='submit' id='b' class='btn btn-primary'>Editar Usuario!</button>";
echo "</form>";