<?php

	function Connection(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "bureau2";
	   	
		$connection = new mysqli($servername, $username, $password, $dbname);

		if (!$connection) {
		    die('MySQL ERROR: ' . mysql_error());
		}
		
		return $connection;
	}
?>
