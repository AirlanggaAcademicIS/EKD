<?php

include_once 'connection.php';
	
	class KegPengabdian {
		
		private $db;
		private $connection;
		
        private $tahunperiode;
        private $semesterperiode;
        private $judulpengabdian;
        private $bukti;
        private $namauser;
        private $idkegpengabdian;
        
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getKegPengabdian(){
			$query = "SELECT kegiatanpengabdianmasyarakat.IDKEGIATANPENGABDIANMASYARAKAT, periode.TAHUNPERIODE, periode.SEMESTER, pengabdianmasyarakat.JUDULPENGABDIANMASYARAKAT, buktipenugasan.KETERANGAN, user.NAMA FROM kegiatanpengabdianmasyarakat, periode, pengabdianmasyarakat, user, buktipenugasan WHERE kegiatanpengabdianmasyarakat.IDPERIODE = periode.IDPERIODE AND kegiatanpengabdianmasyarakat.IDBUKTIPENUGASAN = buktipenugasan.IDBUKTIPENUGASAN AND kegiatanpengabdianmasyarakat.IDPENGABDIANMASYARAKAT = pengabdianmasyarakat.IDPENGABDIANMASYARAKAT AND kegiatanpengabdianmasyarakat.NIP = user.NIP";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
                    echo "<tr>";
					echo "<td>".$this -> tahunperiode=$data['TAHUNPERIODE']."/".$this->semesterperiode = $data['SEMESTER']."</td>";
                    echo "<td>".$this -> judulpengabdian=$data['JUDULPENGABDIANMASYARAKAT']."</td>";
                    echo "<td>".$this -> namauser=$data['NAMA']."</td>";
                    echo "<td>".$this -> bukti=$data['KETERANGAN']."</td>";
                    echo "<td>"."<a href='content-kegpengabdian-update.php?id=".$this -> idkegpengabdian=$data['IDKEGIATANPENGABDIANMASYARAKAT']."'>
                    <button class='btn btn-primary'>Update</button></a>"."<a href='proses-kegpengabdian-delete.php?id=".$this -> idkegpengabdian=$data['IDKEGIATANPENGABDIANMASYARAKAT']."'>
                    <button class='btn btn-primary'>Delete</button></a>"."</td>";
                    echo "</tr>";
				}
			}
		}
	}
			
$kegpengabdian = new KegPengabdian();
$kegpengabdian->getKegPengabdian();
?>