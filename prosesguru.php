<?php
session_start();
include "config.php";
error_reporting(0);

if (empty($_SESSION['nis']) AND empty($_SESSION['password'])){include "guru.php";}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Selamat Datang!</title>
<style type="text/css">
body h2 {
	color: #FFF;
}
</style>
</head>
<body>

<?php
$sql = mysql_query("SELECT * FROM guru WHERE nip = '$_SESSION[nip]'");
while ($data = mysql_fetch_array($sql))
{
 $user_nama = $data['user_nama'];
}
?>
<h2>Selamat Datang <?php echo "$user_nama"; ?>!</h2>

<?php
if ($_SESSION[user_akses] == "Guru Matematika") {include "nilaimat.php";}
if ($_SESSION[user_akses] == "Guru Bahasa Indonesia") {include "nilaiind.php";}
if ($_SESSION[status] == "Guru Bhs Inggris") {include "nilaiing.php";}
if ($_SESSION[status] == "Guru Jurusan") {include "nilaijurusanv.php";}

if ($_SESSION[user_akses] == ""){echo "Kamu tidak memiliki akses kesini! <a href='raport.php' title='KEMBALI!'>KEMBALI</a>";}

?>
</body>
</html>
<?php } ?>