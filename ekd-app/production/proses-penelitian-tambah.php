<?php


include_once 'connection.php';
	
	class Penelitian {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputHAKI($tahun, $judul, $sumber, $jumlah){
			$query = "INSERT INTO penelitian (TAHUNPENELITIAN, JUDULPENELITIAN, SUMBERDANAPENELITIAN, JUMLAHDANAPENELITIAN) VALUES ('$tahun','$judul','$sumber','$jumlah')";
			$inserted = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$haki = new Penelitian();
if($_POST['form-submit'] == "Submit"){
    $tahun = $_POST['form-tahun'];
    $judul = $_POST['form-judul'];
    $sumber = $_POST['form-sumber'];
    $jumlah = $_POST['form-jumlah'];
    $haki->inputHAKI($tahun, $judul, $sumber, $jumlah);
    }
header("Location: content-penelitian-view.php");

?>
