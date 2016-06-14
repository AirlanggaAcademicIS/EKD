<?php

include_once 'connection.php';
	
	class BuktiPenugasan {
		
		private $db;
		private $connection;
		
		private $idbuktipenugasan;
		private $tipebuktipenugasan;
		private $keterangan;
		private $path;
		
        function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getBuktiPenugasan(){
			$query = "SELECT * FROM buktipenugasan";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
					echo '<option value="'.$this->idbuktipenugasan=$data['IDBUKTIPENUGASAN'].'">'.$this->keterangan=$data['KETERANGAN'].'</option>';
				}
			}
		}
	}
	
	$bukti = new BuktiPenugasan();
	$bukti->getBuktiPenugasan();
?>