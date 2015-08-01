<?php 


require_once  'Cliente.php';

$cliente = new Cliente();
$lc = $cliente->listar();

require_once 'cliente.list.php';
?>






