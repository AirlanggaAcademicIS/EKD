<?php

include_once 'connection.php';
	
	class PublikasiTambah {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputPublikasi($nip, $periode, $bukti, $lingkup, $judul, $atribut, $namajurnal, $kontribusi, $keterangan, $buktisk){ 
            
			$query = "INSERT INTO jurnal (JUDULJURNAL, ATRIBUTJURNAL, NAMAJURNAL, LINGKUPJURNAL, KETERANGANJURNAL, BUKTI_SK) VALUES ('$judul','$atribut','$namajurnal','$lingkup','$keterangan','$buktisk')";
			$inserted = mysqli_query($this->connection, $query);
            $query1 = "INSERT INTO publikasiilmiah (IDJURNAL, IDBUKTIPENUGASAN, NIP, IDPERIODE, KONTRIBUSI) VALUES ('1','$bukti','$nip','$periode','$kontribusi')";
            $inserted = mysqli_query($this->connection, $query1);   
            
			
			mysqli_close($this->connection);
		}
	}

$publikasi = new PublikasiTambah();
if($_POST['form-submit'] == "Submit"){
    $nip = $_POST['form-nip'];
    $bukti = $_POST['buktipenugasan'];
    $periode = $_POST['form-periode'];
    $lingkup = $_POST['form-lingkup'];
    $judul = $_POST['form-judul'];
	$atribut = $_POST['form-atribut'];
    $namajurnal = $_POST['form-namajurnal'];
    $kontribusi = $_POST['form-kontrib'];
	$keterangan = $_POST['form-ket'];
    $buktisk = $_POST['bukti-sk'];
    $publikasi->inputPublikasi($nip, $lingkup, $judul, $atribut, $namajurnal, $kontribusi, $keterangan, $buktisk);
}
include 'content-publikasi-view.php';

?>