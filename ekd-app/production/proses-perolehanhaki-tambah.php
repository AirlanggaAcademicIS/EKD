<?php


include_once 'connection.php';
	
	class Haki {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputPHaki($periode, $bukti, $haki, $nip, $kontrib){
			$query = "INSERT INTO perolehanhaki (IDPERIODE, NIP, IDBUKTIPENUGASAN, IDHAKI, KONTRIBUSIPEROLEHANHAKI) VALUES ('$periode','$nip','$bukti','$haki','$kontrib')";
			$inserted = mysqli_query($this->connection, $query);
            
			mysqli_close($this->connection);
		}
	}
			
$haki = new Haki();
if($_POST['form-submit'] == "Submit"){
    $periode = $_POST['form-periode'];
    $bukti = $_POST['form-buktipenugasan'];
    $haki = $_POST['form-haki'];
    $nip = $_POST['form-nip'];
    $kontrib = $_POST['form-kontrib'];
    $haki->inputPHaki($periode, $bukti, $haki, $nip, $kontrib);
    }
header("Location: content-perolehanhaki-view.php");

?>
