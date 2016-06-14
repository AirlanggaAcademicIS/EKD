<?php

include_once 'connection.php';
	
	class PopulateUser {
		
		private $db;
		private $connection;
		
		private $iduser;
		private $namauser;
		
        function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getUser(){
			$query = "SELECT * FROM user";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
					echo '<option value="'.$this -> iduser=$data['NIP'].'">'.$this -> namauser=$data['NAMA'].'</option>';
				}
			}
		}
	}
	
	$populateUser = new PopulateUser();
	$populateUser->getUser();
?>