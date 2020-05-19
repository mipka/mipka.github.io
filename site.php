<!DOCTYPE html>
<html>
<head>
	<title>println</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/sitestyle.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
		<?php
		$E_mail = $_COOKIE['E_mail'];
		
	 if (!$E_mail) {
		echo "<script>alert('Вы  не вошли в аккаунт')</script>";
echo "<script>document.location.href='../main.html'</script>";
	}
	else{
		
	}

	?>
	<?php
		$E_mail = $_COOKIE['E_mail'];
		
		$db = "proj";
		$GLOBALS['link'] = mysqli_connect('localhost',
	            'root', '', 'proj');
		$user = "SELECT * FROM `users` WHERE `E_mail` = '$E_mail' ";
   		$quer =   mysqli_query($GLOBALS['link'], $user );
		$row = $quer -> fetch_assoc();
		?>

<div class="container">
	
	<nav style="background-color: #6699ff">
		<div class="row">
		<div class="col-sm-2"><span class="left_block">
	<img class="logo" src="../img/logotip.png" width="70px" height="70px">
</span></div>
		<div class="col-sm-8 text-center"><span class="center"><button type="button" class="btn btn-primary" onclick="myFunction()">Инфо о сайте</button></span></div>
		
		<div class="col-sm-2"><span class="right_block"><img src="../img/user.png" width="30px" height="30px"><a href="http://localhost/user.php" class="ssilka">
			<?php 
			echo $row['name'];
            ?>
            &nbsp;
            <?php
	        echo $row['surname'];
            ?></a>
        </span></div>
    </div>
        </nav>
    <div class="col-12 text-center" id="main_block"><?php
    $user = "SELECT * FROM `images`";
   		$result =   mysqli_query($GLOBALS['link'], $user );
    $row = mysqli_fetch_array($result);
do
{
	printf("<hr><p> <img src=" .$row['image'] . "></p> <p><i> " .$row['image_text'] ."</i></p> 
	<p>автор: " .$row['author'] . "</p><br><hr><br><br/>"
	);
}
while($row = mysqli_fetch_array($result));
         ?></div>
</div>
<footer>&copy;mipka</footer>
        		
        		<script>
function myFunction() {
  alert("Это фотоблог , можете скачивать эти изображения");
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>