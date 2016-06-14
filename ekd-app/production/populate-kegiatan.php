<?php

include_once 'connection.php';
	
	class PopulateKegiatan {
		
		private $db;
		private $connection;
		
		private $iduser;
		private $namauser;
		
        function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getKeg(){
			$query = "SELECT * FROM kegiatan";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
					echo '<option value="'.$this -> id=$data['IDKEGIATAN'].'">'.$this -> nama=$data['NAMAKEGIATAN'].'</option>';
				}
			}
		}
	}
	
	$populatekeg = new PopulateKegiatan();
	$populatekeg->getKeg();
?>