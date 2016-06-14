<?php

include_once 'connection.php';
	
	class Pengabdian {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function updatePengabdian($id, $tahun, $judul, $sumberdana, $jumlahdana){
			$query = "UPDATE pengabdianmasyarakat SET TAHUNPENGABDIANMASYARAKAT='$tahun', JUDULPENGABDIANMASYARAKAT='$judul', 
            SUMBERDANAPENGABDIANMASYARAKAT='$sumberdana', 
            JUMLAHDANAPENGABDIANMASYARAKAT='$jumlahdana' WHERE IDPENGABDIANMASYARAKAT='$id'";
//            '".$_GET['id']."'
			$updated = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$pengabdian = new Pengabdian();
if($_POST['form-submit'] == "Submit"){
    $id = $_POST['form-id'];
    $tahun = $_POST['form-tahun'];
    $judul = $_POST['form-judul'];
    $sumberdana = $_POST['form-sumberdana'];
    $jumlahdana = $_POST['form-jumlahdana'];
    $pengabdian->updatePengabdian($id, $tahun, $judul, $sumberdana, $jumlahdana);
}
header("Location: content-pengabdian-view.php");

?>