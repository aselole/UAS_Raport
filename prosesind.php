<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("raport");
extract($_POST);
mysql_query ("update nilaiind set nama='$nama',nilai_id='$nilai_ind' where id='$id' ");


echo "<center>Nilai Berhasil di Input<center>";  
    echo "<center><h3><a href=nilaiindphp>Lihat Nilai</a></h3></center>";  


?>
</body>