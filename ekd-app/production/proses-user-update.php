<?php
session_start();
include_once 'connection.php';
	
	class User {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function updateUser($nip, $nidn, $nama, $pangkat, $gol, $jabfungsional, $pendakhir){
			$query = "UPDATE user SET NIDN='$nidn', NAMA='$nama', PANGKAT='$pangkat', GOLONGAN='$gol', JABFUNGSIONAL='$jabfungsional', PENDAKHIR='$pendakhir' WHERE NIP='$nip'";
			$updated = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$user = new User();
if($_POST['form-submit'] == "Submit"){
    $nip = $_POST['form-nip'];
    $nidn = $_POST['form-nidn'];
    $nama = $_POST['form-nama'];
    $pangkat = $_POST['form-pangkat'];
    $gol = $_POST['form-gol'];
    $jabfungsional = $_POST['form-jabfungsional'];
    $pendakhir = $_POST['form-pendakhir'];
    $user->updateUser($nip, $nidn, $nama, $pangkat, $gol, $jabfungsional, $pendakhir);
}
if($_SESSION['keterangan']=="Dosen"){
    header("Location: content-home.php");
} else {
    header("Location: content-home-tu.php");
}


?>