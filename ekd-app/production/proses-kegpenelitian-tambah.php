<?php


include_once 'connection.php';
	
	class Haki {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputKegiatanPenelitian($periode, $nip, $penelitian, $bukti, $kontrib){
			$query = "INSERT INTO kegiatanpenelitian (IDPERIODE, NIP, IDPENELITIAN, IDBUKTIPENUGASAN, KONTRIBUSIKEGIATANPENELITIAN) VALUES ('$periode','$bukti','$haki','$nip', '$kontrib')";
			$inserted = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$haki = new Haki();
if($_POST['form-submit'] == "Submit"){
    $periode = $_POST['form-periode'];
    $nip = $_POST['form-nip'];
    $penelitian = $_POST['form-penelitian'];
    $bukti = $_POST['form-buktipenugasan'];
    $kontrib = $_POST['form-kontrib'];
    $penelitian->inputKegiatanPenelitian($periode, $nip, $penelitian, $bukti, $kontrib);
    }
header("Location: content-kegiatanpenelitian-view.php");

?>
