<?php

include_once 'connection.php';
	
	class Periode {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		public function inputPeriode($tahun, $semester){
			$query = "INSERT INTO `periode` (TAHUNPERIODE, SEMESTER) VALUES ('$tahun','$semester')";
			$inserted = mysqli_query($this->connection, $query);
			mysqli_close($this->connection);
		}
	}
			
$periode = new Periode();
if($_POST['form-submit'] == "Submit"){
    $tahun = $_POST['form-tahun'];
    $semester = $_POST['form-semester'];
	
    $periode->inputPeriode($tahun, $semester);
}
include 'content-home-tu.php';

?>