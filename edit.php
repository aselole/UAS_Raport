


<?php   
 include "config.php";
 
//get the value from form update
 $nilai = $_POST['nilai'];
 
//query for update data in database
 $query = "UPDATE nilaimat SET nilai = '$nilai" ;
 mysql_query($query);
 
	echo "<center>Data Berhasil Di Update<center>";  
    echo "<center><h3><a href=tampil_nilaimat.php>Back Tampil Data</a></h3></center>";  

?>