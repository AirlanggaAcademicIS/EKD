<?php


include_once 'connection.php';
	
	class PendPeng {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputPend($periode, $bukti, $keg, $nip){
			$query = "INSERT INTO pendidikanpengajaran (IDPERIODE, IDBUKTIPENUGASAN, IDKEGIATAN, NIP) VALUES ('$periode','$bukti','$keg','$nip')";
			$inserted = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$pend = new PendPeng();
if($_POST['form-submit'] == "Submit"){
    $periode = $_POST['form-periode'];
    $bukti = $_POST['form-buktipenugasan'];
    $keg = $_POST['form-keg'];
    $nip = $_POST['form-nip'];
    $pend->inputPend($periode, $bukti, $keg, $nip);
    }
header("Location: content-pendpeng-view.php");

?>
