<?php
$servidor = 'localhost';
$banco = 'sistema_notas';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

echo "Conectado!<br>";
?>
