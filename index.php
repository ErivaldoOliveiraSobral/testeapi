<?php
	header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
    
	include_once('Pessoa.php');

	$p1 = new Pessoa();
	$p2 = new Pessoa();
	$p3 = new Pessoa();
	$p4 = new Pessoa();
	$p5 = new Pessoa();
	$p6 = new Pessoa();
	$p7 = new Pessoa();
	$p8 = new Pessoa();
	$p9 = new Pessoa();
	$p10 = new Pessoa();

	$p1->nome = "Erivaldo";
	$p1->email = "erivaldooliveirasobral@gmail.com";
	$p1->senha = "1234";

	$p2->nome = "Felipe";
	$p2->email = "felipe_ny1@hotmail.com";
	$p2->senha = "4321";

	$p3->nome = "Guilherme";
	$p3->email = "guilherme@gmail.com";
	$p3->senha = "admimadmin";

	$p4->nome = "Gabrielly";
	$p4->email = "gabrielly@gmail.com";
	$p4->senha = "admin123";

	$p5->nome = "Jean";
	$p5->email = "jean@gmail.com";
	$p5->senha = "1234admin";

	$arrayPessoa = array();
	array_push($arrayPessoa, $p1);
	array_push($arrayPessoa, $p2);
	array_push($arrayPessoa, $p3);
	array_push($arrayPessoa, $p4);
	array_push($arrayPessoa, $p5);

	echo json_encode($arrayPessoa);
?>