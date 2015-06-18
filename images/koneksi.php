<?php
$host="localhost";
$user="traju_aku";
$password="1234567";
$database="traju_db_cc";
$koneksi=mysql_connect($host,$user,$password);
mysql_select_db($database,$koneksi);
//cek koneksi
if($koneksi){
//echo "berhasil koneksi";
}else{
echo "gagal koneksi";
}
?>  