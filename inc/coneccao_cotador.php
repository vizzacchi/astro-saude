<?php

$connCotador = mysqli_connect('ns474.hostgator.com.br','plan7923_php','d3202171B','plan7923_php');
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
