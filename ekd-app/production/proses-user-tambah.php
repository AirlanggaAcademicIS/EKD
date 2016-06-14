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
				
		public function addUser($nip, $nidn, $nama, $pangkat, $gol, $jabfungsional, $pendakhir, $keterangan){
			$query = "INSERT INTO user (NIP, NIDN, NAMA, PANGKAT, GOLONGAN, JABFUNGSIONAL, PENDAKHIR, KETERANGAN, IDDEPARTEMEN) VALUES ('$nip', '$nidn', '$nama', '$pangkat', '$gol', '$jabfungsional', '$pendakhir', '$keterangan', '1')";
			$updated = mysqli_query($this->connection, $query);
            $query = "INSERT INTO login (NIP, PASSWORD) VALUES ('$nip', 'password')";
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
    $keterangan = $_POST['form-keterangan'];
    $user->addUser($nip, $nidn, $nama, $pangkat, $gol, $jabfungsional, $pendakhir, $keterangan);
}

header("Location: content-home-tu.php");

?>