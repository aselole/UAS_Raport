<form name="form1" method="post" action="aksi_edit_nilaimat.php">  
      <table width="400" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFF99" bgcolor="#FF0000">  
        <tr bgcolor="#FFFFCC">  
          <td height="50" colspan="2"><div align="center">EDIT DATA</div></td>  
        </tr>  
     <?php  
      mysql_connect('localhost','root','');  
      mysql_select_db('raport');  
        
      $sqlTampil="select * from nilaimat Where nilai='$_GET[nilai]'";  
      $qryTampil=mysql_query($sqlTampil);  
      $dataTampil=mysql_fetch_array($qryTampil);  
     ?>  
        <tr bgcolor="#FFFFFF">  
          <td height="40">Nilai</td>  
          <td>:  
          <input name="nilai" type="text" id="nilai" value="<?php echo $dataTampil['nilai']; ?>"></td>  
        </tr>    
        <tr bgcolor="#FFFFFF">  
          <td>&nbsp;</td>  
          <td height="50"><input type="submit" name="Submit" value="Simpan"></td>  
        </tr>  
      </table>  
    </form>  
