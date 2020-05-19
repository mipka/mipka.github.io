<?php
$text = trim ( $_POST['image_text'] );
if (isset($_POST['submit'])){
	$file = $_FILES['file'];
	
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'gif');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			$fileNewName = uniqid('', true).".".$fileActualExt;
			$fileDestination = '../upload/'.$fileNewName;
			move_uploaded_file($fileTmpName, $fileDestination);
			//$db = "proj";
			//$GLOBALS['link'] = mysqli_connect('localhost',
           // 'root', '', 'proj');
			//if ( !$link ) die ("Невозможно подключение к MySQL");
			//$E_mail = $_COOKIE['E_mail'];
			//$user = "SELECT * FROM `users` WHERE `E_mail` = '$E_mail' ";
   			//$quer =   mysqli_query($GLOBALS['link'], $user );
			//$row = $quer -> fetch_assoc();
			//$author = $row['name']." ".$row['surname'];
			//$query = "INSERT INTO `images` (`image`,`image_text`,`author`) VALUES (

		//	'".$fileDestination."',
	 		//	'".$text."',
	  		//		'".$author."',  )";
	  		//		$result = mysqli_query($GLOBALS['link'], $query ) ;
	  				setcookie('foto',$fileDestination, time() + 3600*24, "/");
	  				echo "<script>document.location.href='../user.php'</script>";

		}
		else{
			echo "there was an error uploading your file";
		}
	}
	else {
		echo "you cannot upload files of this type";
	}
}