<?php

include_once 'connection.php';
	
	class Pengabdian {
		
		private $db;
		private $connection;
		
        private $tahun;
        private $judul;
        private $sumberdana;
        private $jumlahdana;
        
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getPengabdian(){
			$query = "SELECT tahun, judul, sumberdana, jumlah FROM pengmas WHERE peserta = 'bramantyo'";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
                    echo "<tr>";
					echo "<td>".$this -> tahun=$data['tahun']."</td>";
                    echo "<td>".$this -> judul=$data['judul']."</td>";
                    echo "<td>".$this -> sumberdana=$data['sumberdana']."</td>";
                    echo "<td>".$this -> jumlahdana=$data['jumlah']."</td>";
                    echo "<td></td>";
                    echo "</tr>";
				}
			}
		}
	}
			
$pengabdian = new Pengabdian();
$pengabdian->getPengabdian();
?>