<?php

include_once 'connection.php';
	
	class Publikasi {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputPublikasi($lingkup, $judul, $atribut, $namajurnal, $kontribusi, $keterangan){
			$query = "INSERT INTO `publikasi` (lingkup, judul, atribut, nama, kontribusi, keterangan) VALUES ('$lingkup','$judul','$atribut','$namajurnal','$kontribusi','$keterangan')";
			$inserted = mysqli_query($this->connection, $query);
			mysqli_close($this->connection);
		}
	}
			
$publikasi = new Publikasi();
if($_POST['form-submit'] == "Submit"){
    $lingkup = $_POST['form-lingkup'];
    $judul = $_POST['form-judul'];
	$atribut = $_POST['form-atribut'];
    $namajurnal = $_POST['form-namajurnal'];
    $kontribusi = $_POST['form-kontrib'];
	$keterangan = $_POST['form-ket'];
    $publikasi->inputPublikasi($lingkup, $judul, $atribut, $namajurnal, $kontribusi, $keterangan);
}
include 'content-home.php';

?>