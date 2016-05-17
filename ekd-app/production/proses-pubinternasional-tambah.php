<?php

include_once 'connection.php';
	
	class PublikasiInternasional {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputPublikasiInternasional($tahun, $judul, $sumberdana, $jumlahdana, $peserta){
			$query = "INSERT INTO `pengmas` (tahun, judul, sumberdana, jumlah, peserta) VALUES ('$tahun','$judul','$sumberdana','$jumlahdana','$peserta')";
			$inserted = mysqli_query($this->connection, $query);
			mysqli_close($this->connection);
		}
	}
			
$pubinternasional = new PublikasiInternasional();
if($_POST['form-submit'] == "Submit"){
    $tahun = $_POST['form-tahun'];
    $judul = $_POST['form-judul'];
    $sumberdana = $_POST['form-sumberdana'];
    $jumlahdana = $_POST['form-jumlahdana'];
    $peserta = 'bramantyo';
    $pengabdian->inputPengabdian($tahun, $judul, $sumberdana, $jumlahdana, $peserta);
}
include 'content-home.php';

?>