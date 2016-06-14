<?php


include_once 'connection.php';
	
	class KegPengabdian {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputKegPengabdian($periode, $bukti, $pengabdianmasyarakat, $nip){
			$query = "INSERT INTO kegiatanpengabdianmasyarakat (IDPERIODE, IDBUKTIPENUGASAN, IDPENGABDIANMASYARAKAT, NIP) VALUES ('$periode','$bukti','$pengabdianmasyarakat','$nip')";
			$inserted = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$kegpengabdian = new KegPengabdian();
if($_POST['form-submit'] == "Submit"){
    $periode = $_POST['form-periode'];
    $bukti = $_POST['form-buktipenugasan'];
    $pengabdianmasyarakat = $_POST['form-pengabdianmasyarakat'];
    $nip = $_POST['form-nip'];
    $kegpengabdian->inputKegPengabdian($periode, $bukti, $pengabdianmasyarakat, $nip);
    }
header("Location: content-kegpengabdian-view.php");

?>
