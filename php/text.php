<?php
		$E_mail = $_COOKIE['E_mail'];
		$foto = $_COOKIE['foto'];
		$text   = trim ( $_POST['image_text'] );
		
		$db = "proj";
		$GLOBALS['link'] = mysqli_connect('localhost',
	            'root', '', 'proj');
		$user = "SELECT * FROM `users` WHERE `E_mail` = '$E_mail' ";
   		$quer =   mysqli_query($GLOBALS['link'], $user );
		$row = $quer -> fetch_assoc();
		$surname = $row['surname'];
		$name = $row['name'];
		$author = $name." ".$surname;
		$query = "INSERT INTO `images` (`image`,`image_text`,`author`) VALUES (

		'".$foto."',
	 	'".$text."',
	  	'".$author."')";
	  	$result = mysqli_query($GLOBALS['link'], $query ) ;


				?>