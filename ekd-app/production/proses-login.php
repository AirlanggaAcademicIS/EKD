<?php

session_start();

include_once 'connection.php';

$db = new DB_Connection();
$connection = $db->getConnection();

if($_POST['form-login'] == "Submit"){
    $nip = $_POST['form-nip'];
    $password = $_POST['form-password'];
    
    $res = mysqli_query($connection, "SELECT * FROM login, user WHERE user.NIP='$nip' AND user.NIP=login.NIP");
    $row = mysqli_fetch_array($res);
    if($row['PASSWORD'] == $password){
        $_SESSION['user'] = $row['NIP'];
        $_SESSION['nama'] = $row['NAMA'];
        $_SESSION['keterangan'] = $row['KETERANGAN'];
        
        include 'content-home.php';
        
    } else {
        echo "NIP atau Password Tidak Cocok";
    }
}

?>