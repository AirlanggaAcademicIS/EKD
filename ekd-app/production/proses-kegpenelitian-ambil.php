<?php

include_once 'connection.php';
	
	class KegiatanPenelitian {
		
		private $db;
		private $connection;
		
        private $tahunperiode;
        private $kontribusi;
        private $judul;
        private $bukti;
        private $namauser;
        private $idkegiatanpenelitian;
        
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getKegiatanPenelitian(){
			$query = "SELECT kegiatanpenelitian.IDKEGIATANPENELITIAN, periode.TAHUNPERIODE, penelitian.JUDULPENELITIAN, buktipenugasan.KETERANGAN, kegiatanpenelitian.KONTRIBUSIKEGIATANPENELITIAN, user.NAMA FROM kegiatanpenelitian, periode, haki, user, buktipenugasan WHERE kegiatanpenelitian.IDPERIODE = periode.IDPERIODE AND kegiatanpenelitian.IDBUKTIPENUGASAN = buktipenugasan.IDBUKTIPENUGASAN AND kegiatanpenelitian.IDKEGIATANPENELITIAN = penelitian.IDPENELITIAN AND kegiatanpenelitian.NIP = user.NIP";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
                    echo "<tr>";
					echo "<td>".$this -> tahunperiode=$data['TAHUNPERIODE']."</td>";
                    echo "<td>".$this -> judul=$data['JUDULPENELITIAN']."</td>";
                    echo "<td>".$this -> namauser=$data['NAMA']."</td>";
                    echo "<tc>".$this -> kontribusi=$data['KONTRIBUSIKEGIATANPENELITIAN']."</td>";
                    echo "<td>".$this -> bukti=$data['KETERANGAN']."</td>";
                    echo "<td>"."<a href='content-kegpenelitian-update.php?id=".$this -> idkegiatanpenelitian=$data['IDKEGIATANPENELITIAN']."'>
                    <button class='btn btn-primary'>Update</button></a>"."<a href='proses-kegpenelitian-delete.php?id=".$this -> idkegiatanpenelitian=$data['IDPEROLEHANHAKI']."'>
                    <button class='btn btn-primary'>Delete</button></a>"."</td>";
                    echo "</tr>";
				}
			}
		}
	}
			
$kegiatanPenelitian = new KegiatanPenelitian();
$kegiatanPenelitian->getKegiatanPenelitian();
?>