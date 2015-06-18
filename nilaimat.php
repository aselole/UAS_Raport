<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="shortcut icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Raport Online</title>
<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
</head>
<body>
<div id="wrapper">
  <div id="header">
    <div>
      
    </div>
  </div>
<div id="nav"> <a href="home.php">Home</a> <a href="prestasi.php">Prestasi</a><a href="profil.php">Kegiatan Baru</a> <a href="raport.php">Raport</a><span class="more"><a href="visidanmisi.php">Visi $ Misi</a> <a href="logout.php">Log out</a></span>  </div>
  <div id="body">
    <div id="body-top">
      <div id="body-bot">
        <div class="clear">

<table width="600" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000" celpading="2" celspacing="1" > 
  <tr bgcolor="#CCFFFF"> 
  <font size="-5">
      <td><div align="center"><strong>Nis</strong></div></td> 
    <td><div align="center"><strong>Nilai</strong></div></td> 
    <td><div align="center"><strong>Pelajaran</strong></div></td>   
    <td><div align="center"><strong>Semester</strong></div></td> 
    <td><div align="center"><strong>Tahun</strong></div></td>
    <td><div align="center"><strong>Aksi</strong></div></td> 
</font>  </tr> 
  <?php 

       mysql_connect("localhost", "root", "");
 mysql_select_db("traju_raport");
 //baris 2 dan 3 digunakan untuk mengkoneksikan ke dalam database
 $no=1;//digunakan untuk membuat nomor 1,2,3,...dst
 $query = mysql_query("select * from bhsindonesiaafy");
 while ($r = mysql_fetch_array($query)) { 
     ?> 
  
   <tr bgcolor="#FFFFFF"> 
<font size="-3">
    <td><?php echo $r['nis'] ?></td>
 <td><?php echo $r['nilai'] ?></td>
 <td><?php echo $r['Pelajaran'] ?></td>
 <td><?php echo $r['Semester'] ?></td>
 <td><?php echo $r['Tahun'] ?></td>
 <td><a href="editmat.php?&edit=<?php echo $r['nis'] ?>">Input Nilai</a> 
</td>
</font>
  </tr> 
    <?php } ?> 
</table>





</body>
</html>
</div>
      </div>
    </div>
  </div>
  <div id="foot">
    <div id="foot-top">
      <div id="foot-bot">
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div id="footer">
    <p>&copy; UNESA - MANAJEMEN INFORMATIKA 2013</p>
  </div>
</div>
</body>
</html>
