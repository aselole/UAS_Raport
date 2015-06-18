<?php
function ($jumbar,$nmTable){

mysql_connect("localhost","root","");
mysql_select_db("traju_raport");
if($_GET[pg]==""){
$_GET[pg]="1";
}
$rss=mysql_query("select * from bhsindonesia ");
$max=mysql_num_rows($rss);  
//$max=19;
//$jumbar=3;

$jumpage=$max/$jumbar;
$jumpagex=ceil($jumpage);

if($_GET[pg]>$jumpagex){
$_GET[pg]="$jumpagex";
}

$y=$_GET[pg]+1;
$x=$_GET[pg]-1;

if(($_GET[pg]>='1')and($_GET[pg]<$jumpagex)){
$next="<a href=?pg=$y>next</a>";

}
if(($_GET[pg]>'1')and($_GET[pg]<=$jumpagex)){
$prev="<a href=?pg=$x>prev</a>&nbsp;&nbsp;";

}

$batas=($_GET[pg]*$jumbar)-$jumbar;
echo "<table>";

$rs=mysql_query("select * from bhsindonesia limit $batas,$jumbar");
while($data=mysql_fetch_row($rs))
{
echo("<TR><TD>$data[0]</TD><TD>$data[1]</TD><TD>$data[2] </TD><tr>");
}  
echo "</table>";

//echo "$batas,$jumbar<br>";

echo "$prev";

for($i=1; $i<= $jumpagex; $i++){
echo "<a href=?pg=$i>$i</a>&nbsp;&nbsp;";
}
echo "$next";


}


?>
