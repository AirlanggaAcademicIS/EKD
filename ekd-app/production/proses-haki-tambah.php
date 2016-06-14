<?php


include_once 'connection.php';
	
	class Haki {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputHAKI($tahun, $judul, $jenis, $lingkup, $atribut){
			$query = "INSERT INTO haki (TAHUNHAKI, JUDULHAKI, JENISHAKI, LINGKUPHAKI, ATRIBUTHAKI) VALUES ('$tahun','$judul','$jenis','$lingkup','$atribut')";
			$inserted = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$haki = new Haki();
if($_POST['form-submit'] == "Submit"){
    $tahun = $_POST['form-tahun'];
    $judul = $_POST['form-judul'];
    $jenis = $_POST['form-jenis'];
    $lingkup = $_POST['form-lingkup'];
    $atribut = $_POST['form-keterangan'];
    $haki->inputHAKI($tahun, $judul, $jenis, $lingkup, $atribut);
    }
header("Location: content-haki-view.php");

?>
