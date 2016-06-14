<?php

include_once 'connection.php';
	
	class Haki {
		
		private $db;
		private $connection;
		
		private $id;
		private $judul;
		
        function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getHAKI(){
			$query = "SELECT * FROM haki";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
					echo '<option value="'.$this -> id=$data['IDHAKI'].'">'.$this -> judul=$data['JUDULHAKI'].'</option>';
				}
			}
		}
	}
	
	$haki = new Haki();
	$haki->getHAKI();
	
?>