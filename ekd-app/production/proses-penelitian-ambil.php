<?php

include_once 'connection.php';
	
	class Penelitian {
		
		private $db;
		private $connection;
		
        private $tahun;
        private $judul;
        private $jenis;
        private $sumber;
        private $jumlah;
        private $id;
        
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getPenelitian(){
			$query = "SELECT * FROM penelitian";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
                    echo "<tr>";
					echo "<td>".$this -> tahun=$data['TAHUNPENELITIAN']."</td>";
                    echo "<td>".$this -> judul=$data['JUDULPENELITIAN']."</td>";
                    echo "<td>".$this -> sumber=$data['SUMBERDANAPENELITIAN']."</td>";
                    echo "<td>".$this -> jumlah=$data['JUMLAHDANAPENELITIAN']."</td>";
                    echo "<td>"."<a href='content-haki-update.php?id=".$this -> id=$data['IDPENELITIAN']."'>
                    <button class='btn btn-primary'>Update</button></a>"."<a href='proses-penelitian-delete.php?id=".$this -> id=$data['IDPENELITIAN']."'>
                    <button class='btn btn-primary'>Delete</button></a>"."</td>";
                    echo "</tr>";
				}
			}
		}
	}
			
$penelitian = new Penelitian();
$penelitian->getPenelitian();
?>