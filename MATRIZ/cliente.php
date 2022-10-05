<?php

	$url = 'http://localhost/API_REST_PHP-MASTER/api/v1';

	$classe = 'estoque';
	$metodo = 'mostrar';

	$montar = $url.'/'.$classe.'/'.$metodo;

 /* 	var_dump($montar);  */

 	$retorno = file_get_contents($montar);

	var_dump(json_decode($retorno, 1)); 