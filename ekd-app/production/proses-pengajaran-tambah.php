<?php

include_once 'connection.php';
	
	class Pengajaran {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputPengajaran($kode_mk, $nip, $sks, $jumlahpengampu, $beban){
			$query = "INSERT INTO `pengajaran` (kode_mk, kode, sks, jumlahpengampu, beban VALUES ('$kode_mk', '$nip', '$sks', '$jumlahpengampu', '$beban')";
			$inserted = mysqli_query($this->connection, $query);
			mysqli_close($this->connection);
		}
	}
			
$pubinternasional = new PublikasiInternasional();
if($_POST['form-submit'] == "Submit"){
    $kode_mk = $_POST['form-kode-mk'];
    $nip = $_POST['form-nip'];
    $sks = $_POST['form-sks'];
    $jumlahpengampu = $_POST['form-jumlahpengampu'];
    $beban = '';
    $pengabdian->inputPengajaran($kode_mk, $nip, $sks, $jumlahpengampu, $beban);
}
include 'content-home.php';

?>