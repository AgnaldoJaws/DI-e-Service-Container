<?php 


require_once  'Cliente.php';

$conexao = new Conexão('localhost','pc_help', 'root', '123');
$cliente = new Cliente($conexao);
$lc = $cliente->listar();

require_once 'cliente.list.php';
?>






