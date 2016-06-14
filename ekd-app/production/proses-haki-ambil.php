<?php

include_once 'connection.php';
	
	class Haki {
		
		private $db;
		private $connection;
		
        private $tahun;
        private $judul;
        private $jenis;
        private $lingkup;
        private $atribut;
        private $id;
        
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getHAKI(){
			$query = "SELECT * FROM haki";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
                    echo "<tr>";
					echo "<td>".$this -> tahun=$data['TAHUNHAKI']."</td>";
                    echo "<td>".$this -> judul=$data['JUDULHAKI']."</td>";
                    echo "<td>".$this -> jenis=$data['JENISHAKI']."</td>";
                    echo "<td>".$this -> lingkup=$data['LINGKUPHAKI']."</td>";
                    echo "<td>".$this -> atribut=$data['ATRIBUTHAKI']."</td>";
                    echo "<td>"."<a href='content-haki-update.php?id=".$this -> id=$data['IDHAKI']."'>
                    <button class='btn btn-primary'>Update</button></a>"."<a href='proses-haki-delete.php?id=".$this -> id=$data['IDHAKI']."'>
                    <button class='btn btn-primary'>Delete</button></a>"."</td>";
                    echo "</tr>";
				}
			}
		}
	}
			
$haki = new Haki();
$haki->getHAKI();
?>