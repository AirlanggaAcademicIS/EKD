<?php

include_once 'connection.php';
	
	class Pengabdian {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputPengabdian($tahun, $judul, $sumberdana, $jumlahdana, $peserta){
			$query = "INSERT INTO `pengabdianmasyarakat` (TAHUNPENGABDIANMASYARAKAT, JUDULPENGABDIANMASYARAKAT, SUMBERDANAPENGABDIANMASYARAKAT, JUMLAHDANAPENGABDIANMASYARAKAT) VALUES ('$tahun','$judul','$sumberdana','$jumlahdana')";
			$inserted = mysqli_query($this->connection, $query);
			mysqli_close($this->connection);
		}
	}
			
$pengabdian = new Pengabdian();
if($_POST['form-submit'] == "Submit"){
    $tahun = $_POST['form-tahun'];
    $judul = $_POST['form-judul'];
    $sumberdana = $_POST['form-sumberdana'];
    $jumlahdana = $_POST['form-jumlahdana'];
    $pengabdian->inputPengabdian($tahun, $judul, $sumberdana, $jumlahdana, $peserta);
}
include 'content-home.php';

?>