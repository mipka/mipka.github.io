<!DOCTYPE html>
<html>
<head>
	<title>account</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/userstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<?php
		$E_mail = $_COOKIE['E_mail'];
		
	 if (!$E_mail) {
		echo "<script>alert('Вы не вошли в аккаунт')</script>";
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
		$status = $row['moderator']
		?>
		<form action="php/exit.php" method="post">
<button type="submit" class="btn btn-warning">Выйти с аккаунта</button>
</form>
<a href="../site.php"><button class="btn btn-primary">НАЗАД</button></a>
<div class="container">
	<h1 class="text1">Ваш профиль</h1>
	<div class="row text-danger">
		<div class="col"><p class="nickname">
			<?php 
			echo $row['name'];
            ?>
            </p>
            <br>
            <p class="surname">
            	<?php 
			echo $row['surname'];
            ?>
            </p>
            <br>
            <p class="mail">
            	<?php 
			echo $row['E_mail'];
            ?>
            </p>
            <br>
            <br>
            <p class="btn1"><button type="button" class="btn btn-info" onclick="show()">Сменить пароль</button></p>
        </div>
            <div class="col">
            	<p class="t1">&nbsp;Имя аккаунта</p>
            	<br>
            	<p class="t2">&nbsp;Фамилия аккаунта</p>
            	<br>
            	<p class="t3">&nbsp;Почта</p>
            	<br>
            	<br>
            	<form action="php/delete.php" method="post">
            	<p class="btn2"><button type="submit" class="btn btn-danger">Удалить аккаунт</button></p>
            	</form>
            </div>
        </div>


        <div class="for_newpass" id="forma">
        	<form action="php/change.php" method="post">
        		<p>
        			
        			<input type="password" name="password" minlength="6"  placeholder="минимум 6 символов">
        			<button type="submit" class="btn btn-success">Изменить пароль</button>
        		</p>
        		<p class="cancel"><button type="button" onclick="hide()">Отмена</button></p>
        	</form>
        	<br>
        </div>





        <?php if ($status == '1'):
        ?>
        	<div class="admin"><p class="admintext">admin-панель</p>
        	<form action="php/upload.php" method="POST" enctype="multipart/form-data">
        	<p style="text-align: center;"><input type="file" name="file">
        	</p>
        	<br><p style="text-align: center;"><button type="submit" name="submit">Загрузить картинку</button></p>	
        	</form>	
        	<form action="php/text.php" method="POST">
        		<p style="text-align: center;">
        	<textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea></p>
      	<p style="text-align: center;"><button type="submit" name="submit">Загрузить картинку на сайт</button></p>	
        	</form>
        	</div>
        
        <?php else:
        ?>	
        <p>Пользовательский аккаунт:)</p>
		<?php endif;?>
		
</div>

<script>
	function show(){
		document.getElementById('forma').style.display = 'block';
	}
	function hide () {
		document.getElementById('forma').style.display = 'none';
						}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>