<?php


include_once 'connection.php';
	
	class Kegiatan {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputKegiatan($kode, $nama, $sks){
			$query = "INSERT INTO kegiatan (KODEMK, NAMAKEGIATAN, SKSKEGIATAN) VALUES ('$kode','$nama','$sks')";
			$inserted = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$keg = new Kegiatan();
if($_POST['form-submit'] == "Submit"){
    $kode = $_POST['form-kodeMK'];
    $nama = $_POST['form-nama'];
    $sks = $_POST['form-sks'];
    $keg->inputKegiatan($kode, $nama, $sks);
    }
header("Location: content-kegiatan-view.php");

?>
