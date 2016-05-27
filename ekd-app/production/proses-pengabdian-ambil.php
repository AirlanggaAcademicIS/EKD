<?php

// include class koneksi database
include_once 'connection.php';
	
	// inisialisasi nama class
	class Pengabdian {
		
		// variabel untuk database
		private $db;
		private $connection;
		
		// variabel yang dibutuhkan untuk tabel pengabdian masyarakat (dari database)
        private $tahun;
        private $judul;
        private $sumberdana;
        private $jumlahdana;
        
		// konstruktor
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
        
		// method ambil dari database
        public function getPengabdian(){
			// variabel query untuk menampung query yang ditentukan untuk operasi ambil, 
			// disesuaikan sama apa aja yang mau diambil 
			$query = "SELECT tahun, judul, sumberdana, jumlah FROM pengmas WHERE peserta = 'bramantyo'";
			
			// variabel yang menampung hasil query
			// mysqli_query == fungsi dari php untuk menjalankan query
			$result = mysqli_query($this->connection, $query);
			
			// fungsi untuk check kalo hasil dari query tidak kosong
			if(mysqli_num_rows($result)>0){
				// fungsi untuk mengambil data,
				// karena lebih dari 1 => pake while
				while($data = mysqli_fetch_array($result)){
					// <tr> <td> untuk ditampilkan dalam tabel
                    echo "<tr>";
					// $this -> tahun => untuk mengisi variabel tahun yang diinisialisasi diawal
					// $data['tahun'] => 'tahun' didapat dari nama kolom di database
					echo "<td>".$this -> tahun=$data['tahun']."</td>";
                    echo "<td>".$this -> judul=$data['judul']."</td>";
                    echo "<td>".$this -> sumberdana=$data['sumberdana']."</td>";
                    echo "<td>".$this -> jumlahdana=$data['jumlah']."</td>";
                    echo "<td></td>";
                    echo "</tr>";
				}
			}
		}
	}
	
//	menginisialisasi class		
$pengabdian = new Pengabdian();
// menjalankan method ambil pengabdian
$pengabdian->getPengabdian();
?>