<?php

include_once 'connection.php';
	
	class Kegiatan {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function updateKegiatan($id, $kode, $nama, $sks){
			$query = "UPDATE kegiatan SET KODEMK='$kode', NAMAKEGIATAN='$nama', 
            SKSKEGIATAN='$sks', 
             WHERE IDKEGIATAN='$id'";
			$updated = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$keg = new Kegiatan();
if($_POST['form-submit'] == "Submit"){
    $id = $_POST['form-id'];
    $kode = $_POST['form-kode'];
    $nama = $_POST['form-nama'];
    $sks = $_POST['form-sks'];
    $keg->updateKegiatan($id, $kode, $nama, $sks);
}
header("Location: content-kegiatan-view.php");

?>