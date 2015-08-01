<?php

require_once  'Conexao.php';

class Cliente {
	
	
	public function listar (){
		
		$cliente = new Conexão('localhost', 'pc_help','root' ,'123');
		$db = $cliente->conect();
		
		$query = "select * from cliente";		
		$stm = $db->query($query);	
		$stm->execute();	
		return  $stm->fetchAll(\PDO::FETCH_OBJ);		
		
	}
}