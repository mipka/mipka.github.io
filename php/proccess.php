<?php
$E_mail = trim ( $_POST['E_mail'] );
$GLOBALS['link'] = mysqli_connect('localhost',
            'root', '', 'proj');
if ( !$link ) die ("Невозможно подключение к MySQL");


$query = "SELECT * FROM users WHERE E_mail = '$E_mail'";
echo "<script>document.location.href='http://localhost/user.php?E_mail=$_POST[E_mail]'</script>";
?>