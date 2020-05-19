<?php
$E_mail = trim ( $_POST['E_mail'] );
$password = trim  ( $_POST['password'] );
if ($E_mail == null || $password == null){
    echo "<script>alert('Пароль или Никнейм введён неправильно')</script>";
      echo  "<script>document.location.href='http://localhost/main.html'</script>";
}

$GLOBALS['link'] = mysqli_connect('localhost',
            'root', '', 'proj');
if ( !$link ) die ("Невозможно подключение к MySQL");


$query = "SELECT * FROM users WHERE E_mail = '$E_mail' AND password = '$password'";
  
$result = mysqli_query($GLOBALS['link'], $query ) ;
$count = mysqli_num_rows($result);

if ($count == 1) {
	setcookie('E_mail',$E_mail, time() + 3600*24, "/");
	 
          echo "<script>document.location.href='http://localhost/site.php?E_mail=$_POST[E_mail]'</script>";
	
}
else{
	echo "<script>alert('Пароль или Никнейм введён неправильно')</script>";
      echo  "<script>document.location.href='http://localhost/main.html'</script>";
}
?>