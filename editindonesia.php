
<link rel="shortcut icon" href="favicon.ico">

<?php
if($_GET['edit']){
mysql_connect("localhost", "root", "");
mysql_select_db("traju_raport");
$query=mysql_query("select * from bhsindonesia where nis='$_GET[edit]'");
$r= mysql_fetch_array($query);
 
?>
<form method="post" action="prosesind.php">
 <table>
 <tr>
 <td>Nis</td>
 <td>:</td>
 <td><input type="text" name="nis" value="<?php echo $r['nis'] ?>"></td>
 </tr>
  <tr>
 <td>Pelajaran</td>
 <td>:</td>
 <td><input type="text" name="Pelajaran" value="<?php echo $r['pelajaran'] ?>">
 </td>
 </tr>
 <tr>
 <td>Guru</td>
 <td>:</td>
 <td><input type="text" name="user_nama" value="<?php echo $r['user_nama'] ?>"></td>
 </tr>
 <tr>
 <td>Kelas</td>
 <td>:</td>
 <td><input type="text" name="Kelas" value="<?php echo $r['Kelas'] ?>"></td>
 </tr>
 <td>Nilai</td>
 <td>:</td>
 <td><input type="text" name="nilai" value="<?php echo $r['nilai'] ?>"></td>
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

