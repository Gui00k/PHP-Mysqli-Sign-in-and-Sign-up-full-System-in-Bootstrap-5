<?php

    //dados de acesso ao banco de dados 
	const DBHOST = 'localhost';
	const DBUSER = 'root';
	const DBPASS = '';
	const DBNAME = 'usuarios';

    //fazendo a conexão com o banco de dados	
	$conexao = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    

	//validando se a conexão aconteceu ou deu erro
	if ($conexao->connect_error) {
	  die('Could not connect to the database!' . $conexao->connect_error);
	}else echo "Conectado com sucesso"
?>