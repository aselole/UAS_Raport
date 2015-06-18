<table width="400" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000" celpading="2" celspacing="1" > 
  <tr bgcolor="#CCFFFF"> 
    <td><div align="center"><strong>Nama</strong></div></td> 
    <td><div align="center"><strong>Nilai</strong></div></td>   
    <td><div align="center"><strong>Aksi</strong></div></td> 
  </tr> 
  <?php 

      mysql_connect('localhost','root',''); 
      mysql_select_db('login_user'); 
    
      $tampil="select * from tbl_input"; 
      $qryTampil=mysql_query($tampil); 
      while ($dataTampil=mysql_fetch_array($qryTampil)) { 
     $no++ 
     ?> 
  
   <tr bgcolor="#FFFFFF"> 

    <td><?php echo $dataTampil['nama']; ?></td> 
     <td>      
        <label><center>
          <select name="nilai" id="nilai">
           <option value="A" selected>A</option>
        <option value="B" selected>B</option>
        <option value="C" selected>C</option>
        <option value="D" selected>D</option>
        <option value="E" selected>E</option>
        </select>
        </center>
      </label></td> 
 
    <td><div align="center"><a href="edit.php?id=<?php echo $dataTampil['nilai'] ; ?>">Delete</a> | <a href="edit.php?id=<?php echo $dataTampil['id']; ?>">Edit </a> 
    </div></td>  | 

</tr> 
    <?php } ?> 
</table><center>
<input type="submit" name="Submit"  value="Simpan" />
</center>