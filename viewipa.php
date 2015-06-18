<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="shortcut icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Nilai IPA</title>
<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
</head>
<body>
<div id="wrapper">
  <div id="header">
    <div>
      
    </div>
  </div>
<div id="nav"> <a href="home.php">Home</a> <a href="prestasi.php">Prestasi</a><a href="profil.php">Kegiatan Baru</a> <a href="raportsiswa.php">Raport</a><span class="more"><a href="visidanmisi.php">Visi $ Misi</a> <a href="logout.php">Log out</a></span>  </div>
  <div id="body">
    <div id="body-top">
      <div id="body-bot">
        <div class="clear">

<table width="400" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000" celpading="2" celspacing="1" > 
  <tr bgcolor="#CCFFFF"> 
  
    <td><div align="center"><strong>Id</strong></div></td> 
    <td><div align="center"><strong>Nama</strong></div></td> 
    <td><div align="center"><strong>Nilai IPA</strong></div></td>   
     
  </tr> 
  <?php 

       mysql_connect("localhost", "root", "");
 mysql_select_db("raport");
 //baris 2 dan 3 digunakan untuk mengkoneksikan ke dalam database
 $no=1;//digunakan untuk membuat nomor 1,2,3,...dst
 $query = mysql_query("select * from nilaiipa");
 while ($r = mysql_fetch_array($query)) { 
     ?> 
  
   <tr bgcolor="#FFFFFF"> 

    <td><?php echo $r['id'] ?></td>
 <td><?php echo $r['nama'] ?></td>
 <td><?php echo $r['nilai_ipa'] ?></td>
 
  </tr> 
    <?php } ?> 
</table>
<center>
<form id="form1" method="post" action="raportsiswa.php">
  <p>
  <input type="submit" name="button" id="button" value="KEMBALI" />
  </p>
</form></center>






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
