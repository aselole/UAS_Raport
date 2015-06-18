<?php

//koneksi ke MySQL

$koneksi = mysqli_connect("localhost","root","");

mysqli_select_db($koneksi, "test");

 

$data = mysqli_query($koneksi,"SELECT * FROM galeri");

while($d = mysqli_fetch_array($data)){

    echo "<img src=\"".$d['file_gambar']."\"><br>";

    echo $d['deskripsi']."<p>\n";

}

?>
