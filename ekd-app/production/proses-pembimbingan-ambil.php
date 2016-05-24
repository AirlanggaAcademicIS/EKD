<?php

include_once 'connection.php';
	
	class Pembimbingan {
		
		private $db;
		private $connection;
		
        private $nama_mhs;
        private $nim_mhs;
        private $judul;
        private $pembimbing1;
        private $pembimbing2;
        private $bukti_sk;
        
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getPembimbingan(){
			$query = "SELECT nama_mhs, nim_mhs, judul, pembimbing1, pembimbing2, bukti_sk FROM pembimbingan";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
                    echo "<tr>";
					echo "<td>".$this -> nama_mhs=$data['nama_mhs']."</td>";
                    echo "<td>".$this -> nim_mhs=$data['nim_mhs']."</td>";
                    echo "<td>".$this -> judul=$data['judul']."</td>";
                    echo "<td>".$this -> pembimbing1=$data['pembimbing1']."</td>";
                    echo "<td>".$this -> pembimbing2=$data['pembimbing2']."</td>";
                    echo "<td>".$this -> bukti_sk=$data['bukti_sk']."</td>";
                    echo "<td></td>";
                    echo "</tr>";
                    
				}
			}
		} 
        
	}
			
$pembimbingan = new Pembimbingan();
$pembimbingan->getPembimbingan();
?>