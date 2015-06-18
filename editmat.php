<link rel="shortcut icon" href="favicon.ico">
<?php
if($_GET['edit']){
mysql_connect("localhost", "root", "");
mysql_select_db("traju_raport");
$query=mysql_query("select * from bhsindonesiaafy where nis='$_GET[edit]'");
$r= mysql_fetch_array($query);
 
?>
<form method="post" action="prosesmat.php">
 <table>
 <tr>
 <td>Nis</td>
 <td>:</td>
 <td><input type="text" name="nis" value="<?php echo $r['nis'] ?>"></td>
 </tr>
 <tr>
 <td>Nilai</td>
 <td>:</td>
 <td><input type="int" name="nilai" value="<?php echo $r['nilai'] ?>">
 </td>
 </tr>
 <tr>
 <td>Pelajaran</td>
 <td>:</td>
 <td><input type="text" name="Pelajaran" value="<?php echo $r['Pelajaran'] ?>"></td>
 </tr>
 <td>Semester</td>
 <td>:</td>
 <td><input type="text" name="Semester" value="<?php echo $r['Semester'] ?>"></td>
 </tr>
 <td>Tahun</td>
 <td>:</td>
 <td><input type="text" name="Tahun" value="<?php echo $r['Tahun'] ?>"></td>
 </tr>
 
 <tr>
 <td><input type="submit" value="Input" name="submit"></td>
 </tr>
 </table>
</form>
 
<?php
}
?>

