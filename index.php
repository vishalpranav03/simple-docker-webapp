<?php
         //$dbhost = 'localhost';
         //$dbuser = 'root';
	 //$dbpass = 'ko';
	 //$dbname = 'test123';
	 //$port   = '3306';
         $mysqli = new mysqli("localhost", "root", "ko", "test123", "3306");
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
         $mysqli->close();
?>
