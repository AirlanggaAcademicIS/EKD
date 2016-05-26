<?PHP session_start();
include 'config.php';
if (isset($_POST['tombollogin'])) {
$status= strip_tags($_POST['status']);
$status = strip_tags($_REQUEST['status']);
$username=$_POST['username'];
$password=md5($_POST['password']);
$tanggal =date("Y-m-d H:i:s");



if($status=="mahasiswa"){
$query=mysql_query("select * from mahasiswa where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
$row=mysql_fetch_array($query);
$id_mahasiswa=$row['id_mahasiswa'];

if($cek){
$_SESSION['username']=$username;
$_SESSION['id_mahasiswa']=$id_mahasiswa;
$_SESSION['status']=$status;

header("location:./home.php");// sukses
$save=mysql_query("update mahasiswa set tanggal='$tanggal' where username='$username'");

}else{
header("location:./?error=1");// login gagal
}	
}

if($status=="dosen"){
$query=mysql_query("select * from dosen where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
$row=mysql_fetch_array($query);
$id_dosen=$row['id_dosen'];

if($cek){
$_SESSION['username']=$username;
$_SESSION['id_dosen']=$id_dosen;
$_SESSION['status']=$status;

header("location:./home.php");// sukses
$save=mysql_query("update dosen set tanggal='$tanggal' where username='$username'");

}else{
header("location:./?error=1");// login gagal
}	
}

if($status="admin"){
$query=mysql_query("select * from admin where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
$row=mysql_fetch_array($query);
$id= strip_tags($row['id']);

if($cek){
$_SESSION['username']=$username;
$_SESSION['id']=$id;
$_SESSION['status']=$status;
header("location:./home.php");// sukses
$save=mysql_query("update admin set tanggal='$tanggal' where username='$username'");

}else{
header("location:./?error=1");// login gagal
}	
}

}else{
unset($_POST['tombol-login']);
}
?>
<?php if(empty($_SESSION[username])) { } else {header("location:./home.php");}?>
<!DOCTYPE html>

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>LOGIN ADMINISTRATOR</title>
<link rel="icon" type="images/gif" href="img/adm.png" >
<style>
body {background:#fff url(background-texture.png);padding:0px;margin:0 auto}
.container {width:600px;margin:auto;position:relative;}
.logo {background-size:100%;width:400px;height:100px;margin:auto;
 margin-top:0%;}
 .box-login {margin:auto;height:500px;width:500px;display:block;}
.avatar {margin:auto;width:150px;height:150px;background-size:100%;
-moz-border-radius:50%;-webkit-border-radius:50%;-o-border-radius:50%;-ms-border-radius:50%;border-radius:50%;}
.avatar img {width:150px;height:150px;background-size:100%;
-moz-border-radius:50%;-webkit-border-radius:50%;-o-border-radius:50%;-ms-border-radius:50%;border-radius:50%;}
.avatar:hover{margin:auto;width:150px;height:150px;background:url(img/avatar.png) no-repeat center center;background-size:100%;
-moz-border-radius:50%;-webkit-border-radius:50%;-o-border-radius:50%;-ms-border-radius:50%;border-radius:50%;
-moz-box-shadow: 0 0 2px #ccc;-webkit-box-shadow: 0 0 2px #ccc;box-shadow: 0 0 2px #ccc;}
.login {margin-bottom:10px;}
.login input {border:solid 1px #cccccc;padding:5px;font-family:Arial, Helvetica, sans-serif;font-size:16px;
width:90%;margin:auto;margin-bottom:5px;margin-top:5px;color:#999999;padding-left:20px;}
.login-stat {color:#ffffff;font-family:Arial, Helvetica, sans-serif;line-height:22px; padding:10px; z-index:999;
background:#FF9900; position:fixed; left:0;right:0;margin-left:auto;margin-right:auto; width:500px;border-radius:10px;font-size:15px;}
.login input:hover{border:solid 1px #999999;}
.login select {display: inline-block;padding:5px;font-size: 16px;line-height: 20px;color: #555555;
vertical-align: middle;max-width:95%;padding-left:20px; border:solid 1px #cccccc; width:100%;}
.login select:hover{border:solid 1px #999999;} 
.login label {font-family:Arial, Helvetica, sans-serif;font-size:14px;padding-bottom:2px;padding-top:5px;} 
input[type="text"],
input[type="password"]{display: inline-block;height:24px;padding: 5px;font-size: 16px;line-height: 20px;color: #555555;
vertical-align: middle;max-width:90%;padding-left:20px;}
.icon-login{background:#ffffff url(nama.png) no-repeat center left;height:20px;width:20px;display:block}
.icon-pass{background:#ffffff url(key.png) no-repeat center left;height:20px;width:20px;display:block}
input[type=submit],input[type=reset]{border:solid 0px;color:#ffffff;padding:7px;width:95%;cursor:pointer;
border:solid 0px;background:#0099FF;-moz-border-radius:3px;font-family:Arial, Helvetica, sans-serif;letter-spacing:2px;
-webkit-border-radius:3px;-o-border-radius:3px;-ms-border-radius:3px;border-radius:3px;
outline: 0;-webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
-moz-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);} 
input[type=submit]:hover,input[type=reset]:hover{border:solid 0px;background:#0033FF;outline: 0;-webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);-moz-box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);
box-shadow: inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);}
.footer{background:#000000;height:30px;font-family:Arial, Helvetica, sans-serif;color:#ffffff;position:fixed;width:100%;text-align:center;bottom:0px;}
</style>
</head>

<body id="login-bg" onLoad="document.form.elements['username'].focus();"> 

<?php  if (!empty($_GET['error'])) { if ($_GET['error'] == 1) { echo '<div class="login-stat">User Name dan Password Salah..!</div>';}}?>
<form action="" name="form" method="post">
<div class="container"><div class="logo"></div>
<div class="box-login"><div class="avatar">

<img src="avatar.png" width="150px" height="150px" /></div>
<div class="login"><label>Tipe</label>
<select name="status">
<option value="admin">Admin</option>
<option value="mahasiswa">Mahasiswa</option>
<option value="dosen">Dosen</option>
</select>
</div>
<div class="login"><label>Username</label>
<input name="username" type="text" placeholder="Username" id="user" class="icon-login" /></div>
<div class="login"><label>Password</label>
<input name="password" type="password" placeholder="Password" id="pass" class="icon-pass" /></div>
<div class="login">
<input name="tombollogin" type="submit" id="login" value="LOGIN"/>
</div>

</div>
</div>



</div>
</div>
</div>
</form>
<div class="footer">Design : s-widodo.com </div>
</body>

</html>
