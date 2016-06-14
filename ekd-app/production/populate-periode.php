<?php

include_once 'connection.php';
	
	class Periode {
		
		private $db;
		private $connection;
		
		private $idperiode;
		private $tahunperiode;
		private $semester;
		
        function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getPeriode(){
			$query = "SELECT * FROM periode";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
					echo '<option value="'.$this -> idperiode=$data['IDPERIODE'].'">'.$this -> tahunperiode=$data['TAHUNPERIODE'].' / '.$this -> semester=$data['SEMESTER'].'</option>';
				}
			}
		}
	}
	
	$periode = new Periode();
	$periode->getPeriode();
	
?>