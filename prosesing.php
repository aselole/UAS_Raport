<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("raport");
extract($_POST);
mysql_query ("update nilaiing set nama='$nama',nilai_ing='$nilai_ing' where id='$id' ");


echo "<center>Nilai Berhasil di Input<center>";  
    echo "<center><h3><a href=nilaiing.php>Lihat Nilai</a></h3></center>";  


?>
</body>