<?php
	class Cliente
	{
		public string $nome;
		public string $cpf;
		public string $celular;
	}
	
	$cliente1 = new Cliente();
	
	$cliente1->nome = "Pablo Ribeirão";
	$cliente1->cpf = "563.325.852-14";
	$cliente1->celular = "(14) 98132-3167";
	
	echo "<pre>";
	var_dump($cliente1);
	echo "</pre>";
	
?>