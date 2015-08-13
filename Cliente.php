<?php

require_once  'Conexao.php';

class Cliente {
	
	private $db;
	public function __construct($conexao){
		
		$this->db = $conexao->conect();
	}
	
	public function listar (){
			
		
		
		$query = "select * from cliente";		
		$stm = $this->db->query($query);	
		$stm->execute();	
		return  $stm->fetchAll(\PDO::FETCH_OBJ);		
		
	}
}