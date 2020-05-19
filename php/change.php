
	<?php
		$E_mail = $_COOKIE['E_mail'];
		
		$password = trim ( $_POST['password'] );
		if ($password == null){
	    echo "<script>alert('Новый пароль не введен' )</script>";
	    echo "<script>document.location.href='../user.php'</script>";
		}
		
			else{
			$password = addslashes ( $password );
			$db = "proj";
			$link = $GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'proj');
			if ( !$link ) die ("Невозможно подключение к MySQL");
			if ($conn->connect_error) {
			  die("Соединение прервано " . $conn->connect_error);
			}
			$GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'proj') or die ("Can't open $db");
			
			$query = "UPDATE `users` SET `password`='$password' WHERE `E_mail` = '$E_mail'";
			$result =   mysqli_query($GLOBALS['link'],$query );
			if ($result) {
				echo "<script>alert('Вы успешно сменили пароль')</script>";
	        	echo "<script>document.location.href='http://localhost/user.php'</script>";
	      	}
			else {
			  echo "Ошибка" . $conn->error;
			}	
			
		}

		
	
	
	?>
