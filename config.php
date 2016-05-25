<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$host="localhost";
$user="root";
$pass="";
$db="tutorial";
$entries=1;
date_default_timezone_set("Asia/Jakarta"); 
	
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);

if($koneksi){
	//echo "Berhasil koneksi";
}else{
echo"koneksi gagal"; }?>