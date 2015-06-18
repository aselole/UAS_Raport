<link rel="shortcut icon" href="favicon.ico">
<?php
if($_GET['edit']){
mysql_connect("localhost", "root", "");
mysql_select_db("raport");
$query=mysql_query("select * from nilaiing where id='$_GET[edit]'");
$r= mysql_fetch_array($query);
 
?>
<form method="post" action="prosesing.php">
 <table>
 <tr>
 <td>Id</td>
 <td>:</td>
 <td><input type="text" name="id" value="<?php echo $r['id'] ?>"></td>
 </tr>
 <tr>
 <td>Nama</td>
 <td>:</td>
 <td><input type="text" name="nama" value="<?php echo $r['nama'] ?>">
 </td>
 </tr>
 <tr>
 <td>Nilai</td>
 <td>:</td>
 <td><input type="text" name="nilai_ing" value="<?php echo $r['nilai_ing'] ?>"></td>
 </tr>
 <tr>
 <td><input type="submit" value="Input" name="submit"></td>
 </tr>
 </table>
</form>
 
<?php
}
?>

