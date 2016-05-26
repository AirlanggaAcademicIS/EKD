<?php

include_once 'connection.php';
	
	class Pembimbingan {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputPembimbingan($nama_mhs, $nim_mhs, $judul, $pembimbing1, $pembimbing2, $buktisk){
			$query = "INSERT INTO `pembimbingan` (nama_mhs, nim_mhs, judul, pembimbing1, pembimbing2, jenis, bukti_sk) VALUES ('$nama_mhs','$nim_mhs','$judul','$pembimbing1','$pembimbing2','Skripsi','$buktisk')";
			$inserted = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$pembimbingan = new Pembimbingan();
if($_POST['form-submit'] == "Submit"){
    $nama_mhs = $_POST['form-nama_mhs'];
    $nim_mhs = $_POST['form-nim_mhs'];
    $judul = $_POST['form-judul'];
    $pembimbing1 = $_POST['form-pembimbing1'];
    $pembimbing2 = $_POST['form-pembimbing2'];
    $buktisk = $_POST['bukti-sk'];
    $pembimbingan->inputPembimbingan($nama_mhs, $nim_mhs, $judul, $pembimbing1, $pembimbing2, $buktisk);
}
header("Location: pembimbingan_tabel.php");

?>
