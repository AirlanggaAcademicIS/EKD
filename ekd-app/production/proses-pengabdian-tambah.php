<?php

// include class koneksi database
include_once 'connection.php';
	
	// inisialisasi nama class
	class Pengabdian {
		
		// variabel untuk database
		private $db;
		private $connection;
		
		// konstruktor
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		// method untuk masukkan data ke database
		// $tahun, $judul, $sumberdana, $jumlahdana didapat dari kolom di tabel di database
       public function inputPengabdian($tahun, $judul, $sumberdana, $jumlahdana, $peserta){
		   // query untuk insert
		   $query = "INSERT INTO `pengmas` (tahun, judul, sumberdana, jumlah, peserta) VALUES ('$tahun','$judul','$sumberdana','$jumlahdana','$peserta')";
		   // variabel untuk menjalankan fungsi insert
		   $inserted = mysqli_query($this->connection, $query);
		   // menutup koneksi
		   mysqli_close($this->connection);
		}
	}
	
// inisialisasi objek pengabdian				
$pengabdian = new Pengabdian();
// $_POST['form-submit'] ==  Submit didapat dari 'name' dan 'value' dari button di form:
// <button id="send" type="submit" class="btn btn-success" name="form-submit" value="Submit">Submit</button>
if($_POST['form-submit'] == "Submit"){
	// 'form-tahun' juga didapat dari 'name' di form:
	// <input id="name" class="form-control col-md-7 col-xs-12" name="form-tahun"  required="required" type="text">
	// dan seterusnya sampai semua dari form terpenuhi
    $tahun = $_POST['form-tahun'];
    $judul = $_POST['form-judul'];
    $sumberdana = $_POST['form-sumberdana'];
    $jumlahdana = $_POST['form-jumlahdana'];
	// variabel dummy untuk testing
    $peserta = 'bramantyo';
	// menjalankan fungsi insert
    $pengabdian->inputPengabdian($tahun, $judul, $sumberdana, $jumlahdana, $peserta);
}

// redirect ke halaman home setelah selesai operasi insert
include 'content-home.php';

?>