<?php

// include class koneksi database
include_once 'connection.php';
	
	// inisialisasi nama class
	class Publikasi {
		
		// variabel untuk database
		private $db;
		private $connection;
		
		// konstruktor
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
				
		// method untuk masukkan data ke database
		// $lingkup, $judul, $atribut, $namajurnal, $kontribusi, $keterangan didapat dari kolom di tabel di database
       public function inputPublikasi($lingkup, $judul, $atribut, $namajurnal, $kontribusi, $keterangan){
			// query untuk insert
		   $query = "INSERT INTO `publikasi` (lingkup, judul, atribut, nama, kontribusi, keterangan) VALUES ('$lingkup','$judul','$atribut','$namajurnal','$kontribusi','$keterangan')";
			// variabel untuk menjalankan fungsi insert
		   $inserted = mysqli_query($this->connection, $query);
			// menutup koneksi
		   mysqli_close($this->connection);
		}
	}
			
// inisialisasi objek pengabdian				
$publikasi = new Publikasi();
// $_POST['form-submit'] ==  Submit didapat dari 'name' dan 'value' dari button di form:
// <button id="send" type="submit" class="btn btn-success" name="form-submit" value="Submit">Submit</button>
if($_POST['form-submit'] == "Submit"){
    // 'form-lingkup' juga didapat dari 'name' di form:
	// <input id="name" class="form-control col-md-7 col-xs-12" name="form-lingkup"  required="required" type="text">
	// dan seterusnya sampai semua dari form terpenuhi
    $lingkup = $_POST['form-lingkup'];
    $judul = $_POST['form-judul'];
	$atribut = $_POST['form-atribut'];
    $namajurnal = $_POST['form-namajurnal'];
    $kontribusi = $_POST['form-kontrib'];
	$keterangan = $_POST['form-ket'];
    // menjalankan fungsi insert
    $publikasi->inputPublikasi($lingkup, $judul, $atribut, $namajurnal, $kontribusi, $keterangan);
}

// redirect ke halaman home setelah selesai operasi insert
include 'content-home.php';

?>