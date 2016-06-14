<?php

include_once 'connection.php';
	
	class Pend {
		
		private $db;
		private $connection;
		
        private $tahunperiode;
        private $semesterperiode;
        private $namakeg;
        private $bukti;
        private $namauser;
        private $idpend;
        
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getPend(){
			$query = "SELECT pendidikanpengajaran.IDPENDIDIKANPENGAJARAN, periode.TAHUNPERIODE, periode.SEMESTER, kegiatan.NAMAKEGIATAN, buktipenugasan.KETERANGAN, user.NAMA FROM pendidikanpengajaran, periode, kegiatan, user, buktipenugasan WHERE pendidikanpengajaran.IDPERIODE = periode.IDPERIODE AND pendidikanpengajaran.IDBUKTIPENUGASAN = buktipenugasan.IDBUKTIPENUGASAN AND pendidikanpengajaran.IDKEGIATAN = kegiatan.IDKEGIATAN AND pendidikanpengajaran.NIP = user.NIP";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
                    echo "<tr>";
					echo "<td>".$this -> tahunperiode=$data['TAHUNPERIODE']."/".$this->semesterperiode = $data['SEMESTER']."</td>";
                    echo "<td>".$this -> judulpengabdian=$data['NAMAKEGIATAN']."</td>";
                    echo "<td>".$this -> namauser=$data['NAMA']."</td>";
                    echo "<td>".$this -> bukti=$data['KETERANGAN']."</td>";
                    echo "<td>"."<a href='content-pendpeng-update.php?id=".$this -> idpend=$data['IDPENDIDIKANPENGAJARAN']."'>
                    <button class='btn btn-primary'>Update</button></a>"."<a href='proses-pendpeng-delete.php?id=".$this -> idpend=$data['IDPENDIDIKANPENGAJARAN']."'>
                    <button class='btn btn-primary'>Delete</button></a>"."</td>";
                    echo "</tr>";
				}
			}
		}
	}
			
$pend = new Pend();
$pend->getPend();
?>