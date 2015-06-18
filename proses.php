<?php
  session_start();
  if(empty($_SESSION['username'])){
  header("location:index.php");
}
echo "selamat datang ".$_SESSION['username'];
?>
<br/><br/><br/>
<a href="logout.php">Logout</a>