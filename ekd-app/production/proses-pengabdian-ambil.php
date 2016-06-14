<?php

include_once 'connection.php';
	
	class Pengabdian {
		
		private $db;
		private $connection;
		
        private $tahun;
        private $judul;
        private $sumberdana;
        private $jumlahdana;
        private $IDPENGABDIAN;
        
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getPengabdian(){
			$query = "SELECT * FROM pengabdianmasyarakat";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
                    echo "<tr>";
					echo "<td>".$this -> tahun=$data['TAHUNPENGABDIANMASYARAKAT']."</td>";
                    echo "<td>".$this -> judul=$data['JUDULPENGABDIANMASYARAKAT']."</td>";
                    echo "<td>".$this -> sumberdana=$data['SUMBERDANAPENGABDIANMASYARAKAT']."</td>";
                    echo "<td>".$this -> jumlahdana=$data['JUMLAHDANAPENGABDIANMASYARAKAT']."</td>";
                    echo "<td>"."<a href='content-pengabdian-update.php?id=".$this -> IDPENGABDIAN=$data['IDPENGABDIANMASYARAKAT']."'>
                    <button class='btn btn-primary'>Update</button></a>"."<a href='proses-pengabdian-delete.php?id=".$this -> IDPENGABDIAN=$data['IDPENGABDIANMASYARAKAT']."'>
                    <button class='btn btn-primary'>Delete</button></a>"."</td>";
                    echo "</tr>";
				}
			}
		}
	}
			
$pengabdian = new Pengabdian();
$pengabdian->getPengabdian();
?>