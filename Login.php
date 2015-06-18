<?php
    include "config.php";
    $nis=$_POST['nis'];
    $password = md5($_POST['password']);
    
    $siswa = mysql_query("SELECT * FROM login WHERE nis='$nis' AND password='$password'");
    $hasil = mysql_num_rows($siswa);
    $r = mysql_fetch_array($siswa);
    
    if ($hasil > 0)
    {
      session_start();
	  
	 session_register("id");
	  session_register("nis");
      session_register("password");
      session_register("user_nama");
	  session_register("user_akses");

      $_SESSION[id]        = $r[id];
	  $_SESSION[nis]        = $r[nis];
      $_SESSION[password]     = $r[password];
      $_SESSION[user_nama]    = $r[user_nama];
	  $_SESSION[user_akses]			= $r[user_akses];
	  
      header('location:proses.php');
    }
	
    
    else{ echo "LOGIN GAGAL! <br> <a href='raport.php'><< Kembali</a>"; }
?>