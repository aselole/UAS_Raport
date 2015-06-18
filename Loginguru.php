<?php
    include "config.php";
    $nis=$_POST['nip'];
    $password = md5($_POST['password']);
    
    $siswa = mysql_query("SELECT * FROM guru WHERE nip='$nip' AND password='$password'");
    $hasil = mysql_num_rows($siswa);
    $r = mysql_fetch_array($siswa);
    
    if ($hasil > 0)
    {
      session_start();
	  
	 session_register("id");
	  session_register("nip");
      session_register("password");
      session_register("user_nama");
	  session_register("user_akses");

      $_SESSION[id]        = $r[id];
	  $_SESSION[nip]        = $r[nip];
      $_SESSION[password]     = $r[password];
      $_SESSION[user_nama]    = $r[user_nama];
	  $_SESSION[user_akses]			= $r[user_akses];
	  
      header('location:proses.php');
    }
	
    
    else{ echo "LOGIN GAGAL! <br> <a href='guru.php'><< Kembali</a>"; }
?>