<?php

include_once 'connection.php';
	
	class pengajaran {
		
		private $db;
		private $connection;
		
        private $kode_mk;
        private $nip;
        private $sks;
        private $jumlahpengampu;
        private $beban;
        
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getpengajaran(){
			$query = "SELECT kode_mk, nip, sks, jumlah FROM pengmas WHERE peserta = ''";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
                    echo "<tr>";
					echo "<td>".$this -> kode_mk=$data['kode_mk']."</td>";
                    echo "<td>".$this -> nip=$data['nip']."</td>";
                    echo "<td>".$this -> sks=$data['sks']."</td>";
                    echo "<td>".$this -> jumlahpengampu=$data['jumlah']."</td>";
                    echo "<td></td>";
                    echo "</tr>";
				}
			}
		}
	}
			if($_POST['form-submit'] == "Submit"){
    $kode_mk = $_POST['form-kode_mk'];
    $kode = $_POST['form-nip'];
    $sks = $_POST['form-sks'];
    $jumlahpengampu = $_POST['form-jumlahpengampu'];
    $beban = '';
    $pengajaran->inputPengajaran($kode_mk, $kode, $sks, $jumlahpengampu, $beban);
}
$pengajaran = new pengajaran();
$pengajaran->getpengajaran();
?>