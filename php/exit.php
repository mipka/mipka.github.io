<?php
setcookie('E_mail',$E_mail, time() - 3600*24, "/");
echo "<script>alert('Вы вышли с  аккаунта')</script>";
echo "<script>document.location.href='../main.html'</script>";
?>