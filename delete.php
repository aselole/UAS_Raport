<?php  
  
mysql_connect('localhost','root','');  
      
mysql_select_db('raport');  
      
      
      
$id=$_GET['id'];  
      
$delete="Delete from nilaimat Where nilai='$nilai'";  
      
mysql_query($delete) or die ("Error tu");  
      
      
      
echo "<center><h3>Data berhasil di hapus</h3></center>";  
      
      
      
?>  