<?php

include_once 'connection.php';
	
	class Pend {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function updatePend($id, $periode, $bukti, $keg, $nip){
			$query = "UPDATE pendidikanpengajaran SET IDPERIODE='$periode', IDBUKTIPENUGASAN='$bukti', 
            IDKEGIATAN='$keg', 
            NIP='$nip' WHERE IDPENDIDIKANPENGAJARAN='$id'";
//            '".$_GET['id']."'
			$updated = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$pend = new Pend();
if($_POST['form-submit'] == "Submit"){
    $id = $_POST['form-id'];
    $periode = $_POST['form-periode'];
    $bukti = $_POST['form-buktipenugasan'];
    $keg = $_POST['form-keg'];
    $nip = $_POST['form-nip'];
    $pend->updatePend($id, $periode, $bukti, $keg, $nip);
}
header("Location: content-pendpeng-view.php");

?>