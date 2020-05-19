<?php
		$file = $_GET [$fileDestination];
		$E_mail = $_COOKIE['E_mail'];
		$db = "proj";
		$GLOBALS['link'] = mysqli_connect('localhost',
	            'root', '', 'proj');
		$user = "SELECT * FROM `users` WHERE `E_mail` = '$E_mail' ";
   		$quer =   mysqli_query($GLOBALS['link'], $user );
		$row = $quer -> fetch_assoc();
		
		echo($row);
		?>