<?php

include_once 'connection.php';
	
	class Kegiatan {
		
		private $db;
		private $connection;
		
        private $idkeg;
        private $kode;
        private $nama;
        private $sks;
        
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getKegiatan(){
			$query = "SELECT * FROM kegiatan";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
                    echo "<tr>";
					echo "<td>".$this -> kode=$data['KODEMK']."</td>";
                    echo "<td>".$this -> nama=$data['NAMAKEGIATAN']."</td>";
                    echo "<td>".$this -> sks=$data['SKSKEGIATAN']."</td>";
                    echo "<td>"."<a href='content-kegiatan-update.php?id=".$this -> idkeg=$data['IDKEGIATAN']."'>
                    <button class='btn btn-primary'>Update</button></a>"."<a href='proses-kegiatan-delete.php?id=".$this -> idkeg=$data['IDKEGIATAN']."'>
                    <button class='btn btn-primary'>Delete</button></a>"."</td>";
                    echo "</tr>";
				}
			}
		}
	}
			
$keg = new Kegiatan();
$keg->getKegiatan();
?>