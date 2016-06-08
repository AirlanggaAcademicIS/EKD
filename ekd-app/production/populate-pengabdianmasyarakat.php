<?php

include_once 'connection.php';
	
	class PengabdianMasyarakat {
		
		private $db;
		private $connection;
		
		private $idpengabdianmasyarakat;
		private $tahunpengabdianmasyarakat;
		private $judulpengabdianmasyarakat;
		
        function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getPengabdianMasyarakat(){
			$query = "SELECT * FROM pengabdianmasyarakat";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
					echo '<option value="'.$this -> idpengabdianmasyarakat=$data['IDPENGABDIANMASYARAKAT'].'">'.$this -> judulpengabdianmasyarakat=$data['JUDULPENGABDIANMASYARAKAT'].'</option>';
				}
			}
		}
	}
	
	$pengabdianmasyarakat = new PengabdianMasyarakat();
	$pengabdianmasyarakat->getPengabdianMasyarakat();
?>