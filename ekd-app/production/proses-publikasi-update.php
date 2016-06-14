<?php

include_once 'connection.php';
	
	class Pembimbingan {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function updatePembimbingan($id, $lingkup, $judul, $atribut, $namajurnal, $kontribusi, $keterangan){
			$query = "UPDATE jurnal SET LINGKUPJURNAL='$lingkup', JUDULJURNAL='$judul', ATRIBUTJURNAL='$atribut', NAMAJURNAL='$namajurnal', KETERANGAN='$keterangan' WHERE IDJURNAL = '$id'";
			$updated = mysqli_query($this->connection, $query);
            
            $query = "UPDATE publikasiilmiah SET KONTRIBUSIPUBLIKASIILMIAH='$kontribusi' WHERE IDJURNAL = '$id'";
			$updated = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$pembimbingan = new Pembimbingan();
if($_POST['form-submit'] == "Submit"){
    $id = $_POST['form-id'];
    $lingkup = $_POST['form-lingkup'];
    $judul = $_POST['form-judul'];
	$atribut = $_POST['form-atribut'];
    $namajurnal = $_POST['form-namajurnal'];
    $kontribusi = $_POST['form-kontrib'];
	$keterangan = $_POST['form-ket'];
    $publikasi->inputPublikasi($id, $lingkup, $judul, $atribut, $namajurnal, $kontribusi, $keterangan);
}
header("Location: content-publikasi-view.php");

?>