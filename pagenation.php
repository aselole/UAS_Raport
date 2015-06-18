
<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('traju_raport');

// jumlah data yang akan ditampilkan per halaman

$dataPerPage = 10;

// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
// sedangkan apabila belum, nomor halamannya 1.

if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
}
else $noPage = 1;

// perhitungan offset

$offset = ($noPage - 1) * $dataPerPage;

// query SQL untuk menampilkan data perhalaman sesuai offset

$query = "SELECT * FROM bhsindonesia LIMIT $offset, $dataPerPage";

$result = mysql_query($query) or die('Error');

// menampilkan data
 



echo "<table border='1' width='600' border='0' align='center' cellpadding='2' cellspacing='1' bgcolor='#CCFFFF' celpading='2' celspacing='1'>";
 

echo "<tr bgcolor='#CCFFFF'><td>nis</td><td>Pelajaran</td><td>Guru</td><td>Kelas</td><td>Nilai</td><td>Semester</td><td>Tahun</td></tr>";
while($data = mysql_fetch_array($result))
{
	echo "<tr bgcolor='#FFFFFF'><td>".$data['nis']."</td><td>".$data['Pelajaran']."</td><td>".$data['user_nama']."</td><td>".$data['Kelas']."</td><td>".$data['nilai']."</td><td>".$data['Semester']."</td><td>".$data['Tahun']."</td></tr>";

}

echo "</table>";

// mencari jumlah semua data dalam tabel guestbook

$query   = "SELECT COUNT(*) AS jumData FROM bhsindonesia";
$hasil  = mysql_query($query);
$data     = mysql_fetch_array($hasil);

$jumData = $data['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Prev</a>";

// memunculkan nomor halaman dan linknya

for($page = 1; $page <= $jumPage; $page++)
{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         {
            if (($showPage == 1) && ($page != 2))  echo "...";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
            $showPage = $page;
         }
}

// menampilkan link next

if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next </a>";

?>