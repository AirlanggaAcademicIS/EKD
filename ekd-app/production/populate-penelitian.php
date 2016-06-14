<?php

include_once 'connection.php';
	
	class Penelitian {
		
		private $db;
		private $connection;
		
		private $id;
		private $judul;
		
        function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getPenelitian(){
			$query = "SELECT * FROM penelitian";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
					echo '<option value="'.$this -> id=$data['IDPENELITIAN'].'">'.$this -> judul=$data['JUDULPENELITIAN'].'</option>';
				}
			}
		}
	}
	
	$penelitian = new Penelitian();
	$penelitian->getPenelitian();
	
?>