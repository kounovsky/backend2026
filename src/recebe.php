
<?php
echo "<h1>Recebe</h1>";
echo "<pre>";print_r($_POST);echo "</pre>";

$login=$_POST["login"];
$Senha=$_POST["senha"];

echo "login: <b>$login</b><br>";
echo "Senha: <b>$senha</b><br>";
?>