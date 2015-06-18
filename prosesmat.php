<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("traju_raport");
extract($_POST);
mysql_query ("update bhsindonesiaafy set nilai='$nilai',Pelajaran='$Pelajaran',Semester='$Semester',Tahun='$Tahun', where nis='$nis' ");


echo "<center>Nilai Berhasil di Input<center>";  
    echo "<center><h3><a href=nilaimat.php>Lihat Nilai</a></h3></center>";  



?>
</body>