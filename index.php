<?php
	header('Access-Control-Allow-Origin: *');
	include_once('Pessoa.php');

	$p = new Pessoa();
	$p2 = new Pessoa();

	$p->nome = "Erivaldo";
	$p->email = "erivaldooliveirasobral@gmail.com";
	$p->senha = "1234";

	$p2->nome = "Felipe";
	$p2->email = "felipe_ny1@hotmail.com";
	$p2->senha = "4321";

	$arrayPessoa = array();
	array_push($arrayPessoa, $p);
	array_push($arrayPessoa, $p2);

	echo json_encode($arrayPessoa);
?>