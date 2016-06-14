<?php

include_once 'connection.php';
	
	class Publikasi {
		
		private $db;
		private $connection;
		
        private $lingkup;
        private $judul;
        private $vol;
        private $nama;
        private $kontribusi;
        private $keterangan;
        private $sk;
        private $id_jurnal;
        
//        private $counter;
        
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
        public function getPublikasi(){
			$query = "SELECT * FROM publikasiilmiah, jurnal, buktipenugasan WHERE publikasiilmiah.IDBUKTIPENUGASAN = buktipenugasan.IDBUKTIPENUGASAN";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0){
				while($data = mysqli_fetch_array($result)){
//                    $counter++;
                    echo "<tr>";
//                    echo "<td>".$counter."</td>";
					echo "<td>".$this -> lingkup=$data['LINGKUPJURNAL']."</td>";
                    echo "<td>".$this -> judul=$data['JUDULJURNAL']."</td>";
                    echo "<td>".$this -> vol=$data['ATRIBUTJURNAL']."</td>";
                    echo "<td>".$this -> nama=$data['NAMAJURNAL']."</td>";
                    echo "<td>".$this -> kontribusi=$data['KONTRIBUSIPUBLIKASIILMIAH']."</td>";
                    echo "<td>".$this -> keterangan=$data['KETERANGANJURNAL']."</td>";
                    echo "<td>".$this -> sk=$data['KETERANGAN']."</td>";
                    echo "<td>"."<a href='content-publikasi-update.php?id=".$this -> id_jurnal=$data['IDJURNAL']."'>
                    <button class='btn btn-primary'>Update</button></a>"."<a href='proses-publikasi-delete.php?id=".$this -> id_jurnal=$data['IDJURNAL']."'>
                    <button class='btn btn-primary'>Delete</button></a>"."</td>";
//                  echo "<td><input type="button" value="Submit" onclick="submitter(this)"/></td>";
                    echo "</tr>";
                    
				}
			}
		} 
        
	}
			
$publikasi = new Publikasi();
$publikasi->getPublikasi();
?>