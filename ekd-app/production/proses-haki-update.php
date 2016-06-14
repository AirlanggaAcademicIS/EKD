<?php

include_once 'connection.php';
	
	class Haki {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function updateHaki($id, $tahun, $judul, $jenis, $lingkup, $atribut){
			$query = "UPDATE haki SET TAHUNHAKI='$tahun', JUDULHAKI='$judul', JENISHAKI='$jenis', LINGKUPHAKI='$lingkup', ATRIBUTHAKI='$atribut' WHERE IDHAKI='$id'";
//            '".$_GET['id']."'
			$updated = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$haki = new Haki();
if($_POST['form-submit'] == "Submit"){
    $id = $_POST['form-id'];
    $tahun = $_POST['form-tahun'];
    $judul = $_POST['form-judul'];
    $jenis = $_POST['form-jenis'];
    $lingkup = $_POST['form-lingkup'];
    $atribut = $_POST['form-atribut'];
    $haki->updateHaki($id, $tahun, $judul, $jenis, $lingkup, $atribut);
}
header("Location: content-haki-view.php");

?>