<?php

include_once 'connection.php';
	
	class Pembimbingan {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function updatePembimbingan($nama_mhs, $nim_mhs, $judul, $pembimbing1, $pembimbing2){
			$query = "UPDATE pembimbingan SET nama_mhs='$nama_mhs', nim_mhs='$nim_mhs', judul='$judul', pembimbing1='$pembimbing1', pembimbing2='$pembimbing2', jenis='Skripsi', bukti_sk='A8104' WHERE nim_mhs='$nim_mhs' ";
			$updated = mysqli_query($this->connection, $query);
            
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
    $pembimbingan->updatePembimbingan($nama_mhs, $nim_mhs, $judul, $pembimbing1, $pembimbing2);
}
header("Location: pembimbingan_tabel.php");

?>