<?php
include_once 'connection.php';
	
	class Pengabdian {
		
		private $db;
		private $connection;
		
        private $tahun;
        private $judulBuku;
        private $jumlahhalaman;
        private $lingkup;
        private $penerbit;
        private $statuskeikutsertaan;
        private $buktipenulisan;
        
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
                    echo "<td>".$this -> judulBuku=$data['judulbuku']."</td>";
                    echo "<td>".$this -> jumlahhalaman=$data['jumlahhalaman']."</td>";
                    echo "<td>".$this -> lingkup=$data['lingkup']."</td>";
                    echo "<td>".$this -> penerbit=$data['penerbit']."</td>";
                    echo "<td>".$this -> statuskeikutsertaan=$data['statuskeikutsertaan']."</td>";
                    echo "<td>".$this -> buktipenulisan=$data['buktipenulisan']."</td>";
                    echo "<td></td>";
                    echo "</tr>";
				}
			}
		}
	}
			
$bukuajar = new Bukuajar();
$bukuajar->getBukuajar();
?>