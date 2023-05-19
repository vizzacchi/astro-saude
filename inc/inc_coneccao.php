<?php

	//$conn = mysqli_connect('localhost','root','d3202171B','php');
	$conn = mysqli_connect('ns474.hostgator.com.br','plan7923_planosdesaudesjc','d3202171B@','plan7923_planosdesaudesjc');
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	//echo "Connected successfully";

