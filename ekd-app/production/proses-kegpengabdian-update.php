<?php

include_once 'connection.php';
	
	class KegPengabdian {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function updateKegPengabdian($id, $periode, $bukti, $pengabdian, $nip){
			$query = "UPDATE kegiatanpengabdianmasyarakat SET IDPERIODE='$periode', IDBUKTIPENUGASAN='$bukti', 
            IDPENGABDIANMASYARAKAT='$pengabdian', 
            NIP='$nip' WHERE IDKEGIATANPENGABDIANMASYARAKAT='$id'";
//            '".$_GET['id']."'
			$updated = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$kegpengabdian = new KegPengabdian();
if($_POST['form-submit'] == "Submit"){
    $id = $_POST['form-idkegpengabdian'];
    $periode = $_POST['form-periode'];
    $bukti = $_POST['form-buktipenugasan'];
    $pengabdian = $_POST['form-pengabdianmasyarakat'];
    $nip = $_POST['form-nip'];
    $kegpengabdian->updateKegPengabdian($id, $periode, $bukti, $pengabdian, $nip);
}
header("Location: content-kegpengabdian-view.php");

?>