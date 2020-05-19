<?php
$E_mail = $_COOKIE['E_mail'];
$GLOBALS['link'] = mysqli_connect('localhost', 'root', '', 'proj') or die ("Can't open $db");
		
		$query = "DELETE FROM `users` WHERE `E_mail` = '$E_mail'";
		setcookie('E_mail',$E_mail, time() - 3600*24, "/");
		$result =   mysqli_query($GLOBALS['link'],$query );

		if ($result) {
			echo "<script>alert('Вы удалили аккаунт')</script>";
        	echo "<script>document.location.href='../main.html'</script>";
      	}
		else {
		  echo "Ошибка" . $conn->error;
		}	
?>