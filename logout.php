<?php
session_start();
session_destroy();
echo '<script language="javascript">alert("Anda berhasil Log Out"); document.location="raport.php";</script>';
?>