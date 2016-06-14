<?php

include_once 'connection.php';
	
	class PerolehanHaki {
		
		private $db;
		private $connection;
		
        private $tahunperiode;
        private $kontribusi;
        private $judul;
        private $bukti;
        private $namauser;
        private $idperolehanhaki;
        
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getPerolehanHAKI(){
			$query = "SELECT perolehanhaki.IDPEROLEHANHAKI, periode.TAHUNPERIODE, haki.JUDULHAKI, buktipenugasan.KETERANGAN, perolehanhaki.KONTRIBUSIPEROLEHANHAKI, user.NAMA FROM perolehanhaki, periode, haki, user, buktipenugasan WHERE perolehanhaki.IDPERIODE = periode.IDPERIODE AND perolehanhaki.IDBUKTIPENUGASAN = buktipenugasan.IDBUKTIPENUGASAN AND perolehanhaki.IDHAKI = haki.IDHAKI AND perolehanhaki.NIP = user.NIP";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
                    echo "<tr>";
					echo "<td>".$this -> tahunperiode=$data['TAHUNPERIODE']."</td>";
                    echo "<td>".$this -> judul=$data['JUDULHAKI']."</td>";
                    echo "<td>".$this -> namauser=$data['NAMA']."</td>";
                    echo "<td>".$this -> kontribusi=$data['KONTRIBUSIPEROLEHANHAKI']."</td>";
                    echo "<td>".$this -> bukti=$data['KETERANGAN']."</td>";
                    echo "<td>"."<a href='content-perolehanhaki-update.php?id=".$this -> idperolehanhaki=$data['IDPEROLEHANHAKI']."'>
                    <button class='btn btn-primary'>Update</button></a>"."<a href='proses-perolehanhaki-delete.php?id=".$this -> idperolehanhaki=$data['IDPEROLEHANHAKI']."'>
                    <button class='btn btn-primary'>Delete</button></a>"."</td>";
                    echo "</tr>";
				}
			}
		}
	}
			
$perolehanHaki = new PerolehanHaki();
$perolehanHaki->getPerolehanHAKI();
?>