<body>
<?php
$sambung = mysql_connect("localhost", "root", "") or die ("Gagal konek ke server.");
mysql_select_db("raport") or die ("Gagal membuka database.");
$nilai = $_GET['nilai'];
$query = "select *from nilaimat where nilai='$nilai'";
$result =  mysql_query($query, $sambung) or die("gagal melakukan query");
     $buff = mysql_fetch_array($result);
             mysql_close($sambung);
             ?>    
     <form name="form1" method="post" action="aksi_edit_nilaimat1.php">
<p align="left"> Edit Data</p>
<table boder="0" cellspacing="0" style="borde-cellsapcing":collapse" bordercolor="#111111" width="100%">
<tr>
            
<tr>
            <td width="16%">Nama</td>
            <td width="84%"><input type="text" name="nama" value="<?php echo $buff['nama']; ?>" size="29"></td>
</tr>
<tr>
            <td width="16%">Harga</td>
            <td width="84%"><input type="text" name="nilai" value="<?php echo $buff['nilai']; ?>" size="29"></td>
</tr>
<tr>
            <td width="16%"></td>
            <td width="84%"><input type="submit" name="submit" size="29" value="SIMPAN"></td>
</tr>
</table>
</form>

