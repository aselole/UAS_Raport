<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("raport");
extract($_POST);
mysql_query ("update nilaiipa set nama='$nama',nilai_ipa='$nilai_ipa' where id='$id' ");


echo "<center>Nilai Berhasil di Input<center>";  
    echo "<center><h3><a href=nilaiipa.php>Lihat Nilai</a></h3></center>";  


?>
</body>