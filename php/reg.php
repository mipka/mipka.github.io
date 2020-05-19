

<?php



	$name   = trim ( $_POST['name'] );
	$surname = trim ( $_POST['surname'] );
	$E_mail  = trim ( $_POST['E_mail'] ) ;
	$password  = trim ( $_POST['password'] ) ;
	if ($name== null || $surname == null || $E_mail == null || $password == null){
	    echo "<script>alert('Не все данные введены.' )</script>";
	    echo "<script>document.location.href='../main.html'</script>";
	}
	else{
	$db = "proj";

	$GLOBALS['link'] = mysqli_connect('localhost',
	            'root', '', 'proj');

	$query = "INSERT INTO users (`name`,`surname`,`password`,`E_mail`) VALUES (

	'".$name."',
	 '".$surname."',
	  '".$password."', 
	  '".$E_mail."' )";

	$result = mysqli_query($GLOBALS['link'], $query ) ;
	if ($result) {
			echo "<script>alert('Вы создали аккаунт' )</script>";
          	echo "<script>document.location.href='../main.html'</script>";
      	}
     else {
     	echo "<script>alert('Почта занята' )</script>";
          	echo "<script>document.location.href='../main.html'</script>";
     } 	

	mysqli_close ( $link );
	}
	?>
