    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
    <html xmlns="http://www.w3.org/1999/xhtml">  
    <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
    <title>Membagi halaman laporan dengan php</title>  
    <style type="text/css">  
    #navpage a   
    {  
        padding:3px 5px;  
        background-color:#EDFFEA;  
        border:1px solid #ccc;  
        text-decoration:none;  
        color:#5B5B5B;  
    }  
    #navpage a:hover  
    {  
        background-color:#CEFFC6;  
    }  
    </style>  
    </head>  
    <body>  
    <div align="center">  
    <?php  
    mysql_connect("localhost","root","") or die("Gagal Konek ke server");  
    mysql_select_db("traju_raport") or die("Gagal Konek ke database");  
    $tablename="bhsindonesia";  
    $baselink=$_SERVER['PHP_SELF'];  
    // jumlah data perhalaman  
    $rowsPerPage = 10;  
    //nilai pertama  
    $pageNum = 1;  
    if(!empty($_GET['page']))  
    {  
        $pageNum = $_GET['page'];  
    }  
    $offset = ($pageNum - 1) * $rowsPerPage;  
    // query database  
    $query  = "SELECT * FROM $tablename ORDER by nis asc LIMIT $offset, $rowsPerPage";  
    $result = mysql_query($query) or die('Error, query failed. ' . mysql_error());  
    ?>  
      <h2 class="tengah">DATA MAHASISWA</h2>  
      <table width="450" border="0" cellpadding="3" cellspacing="1" bgcolor="#999999">  
        <tr bgcolor="#E8FDEC">  
          <th width="149">Nis</th>  
          <th width="348">Pelajaran</th>  
           <th width="149">Guru</th>  
          <th width="348">Kelas </th>  
           <th width="149">nilai</th>  
          <th width="348">Semester</th>
          <th width="348">Tahun</th>  
        </tr>  
    <?php  
    while($row = mysql_fetch_array($result))  
    {   
    ?>  
        <tr bgcolor="#fff">  
          <td><?php echo $row['nis']?></td>  
          <td><?php echo $row['Pelajaran']?></td>  
           <td><?php echo $row['user_nama']?></td>  
          <td><?php echo $row['Kelas']?></td>  
           <td><?php echo $row['nilai']?></td>  
          <td><?php echo $row['Semester']?></td>  
           <td><?php echo $row['Tahun']?></td>  
            
        </tr>  
    <?php  
    } //end of while;  
    ?>  
      </table>  
    <?php  
        $query   = "SELECT COUNT(nis) AS numrows FROM $tablename";  
        $result  = mysql_query($query) or die('Error, query failed. ' . mysql_error());  
        $row     = mysql_fetch_array($result, MYSQL_ASSOC);  
        $numrows = $row['numrows'];  
        $maxPage  = ceil($numrows/$rowsPerPage);  
        $nextLink = '&nbsp;';  
        if($maxPage >1)  
        {  
            $self     = $_SERVER['PHP_SELF'];  
            $nextLink = array();  
            for($page = 1; $page <= $maxPage; $page++)  
            {  
                $nextLink[] =  "<a href=\"".$baselink."?page=$page\">$page</a>";  
            }  
            $nextLink = "<p>Halaman : </p>" . implode(' ', $nextLink);  
        }  
        echo '<div id="navpage">'.$nextLink.'</div>';  
        mysql_free_result($result);  
    ?>  
    </div>  
    </body>  
    </html>  