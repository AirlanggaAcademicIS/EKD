<?php session_start(); include "config.php";
$status=$_SESSION['status'];
if(isset($_SESSION['username'])){
$username=$_SESSION['username'];

}else{
	session_destroy();
	header('Location:./');
}
?>	



<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>LOGIN BERHASIL</title>
<style>
.menu {float:right;margin-right:20px;}
.menu a {list-style:none;background:#333333; border-radius:5px;padding:4px; text-decoration:none;color:#fff;}
h3 {font-family:Arial, Helvetica, sans-serif;text-align:center;font-size:20px;color:#cccccc; width:500px; margin:auto;
padding-top:10%;}
.profil {width:90px;height:90px;margin:auto}
.profil img {width:80px!important;height:80px;border-radius:50%; margin:auto;}
</style>

</head><body>
<div class="menu">
<a href="./logout.php">Logout</a>
</div>

<?php  if($status=='admin'){ echo"<h3>HAK AKSES LOGIN ADMIN<br> Username : $username </h3><br>
<div class='profil'><img src='./widodo.jpg'/></div>";
}

if($status=='mahasiswa'){
echo"<h3>HAK AKSES LOGIN MAHASISWA <br> Username : $username </h3><div class='profil'><img src='./widodo.jpg'/></div";
}

if($status=='dosen'){
echo"<h3>HAK AKSES LOGIN DOSEN <br> Username : $username </h3><div class='profil'><img src='./widodo.jpg'/></div";
}?>

</body>

</html>