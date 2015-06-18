<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("raport");
extract($_POST);
mysql_query ("update nilaijurusan set nama='$nama',nilai_jurusan='$nilai_jurusan' where id='$id' ");


echo "<center>Nilai Berhasil di Input<center>";  
    echo "<center><h3><a href=nilaijurusan.php>Lihat Nilai</a></h3></center>";  


?>
</body>