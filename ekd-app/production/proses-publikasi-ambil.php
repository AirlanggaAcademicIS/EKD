<?php

include_once 'connection.php';
	
	class Publikasi {
		
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
        
        public function getPublikasi(){
			$query = "SELECT * FROM publikasi";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
                    echo "<tr>";
					echo "<td>".$this -> lingkup=$data['lingkup']."</td>";
                    echo "<td>".$this -> judul=$data['judul']."</td>";
                    echo "<td>".$this -> atribut=$data['atribut']."</td>";
                    echo "<td>".$this -> nama=$data['nama']."</td>";
                    echo "<td>".$this -> kontribusi=$data['kontribusi']."</td>";
                    echo "<td>".$this -> keterangan=$data['keterangan']."</td>";
                    echo "<td></td>";
                    echo "</tr>";
				}
			}
		}
	}
			
$publikasi = new Publikasi();
$publikasi->getPublikasi();
?>