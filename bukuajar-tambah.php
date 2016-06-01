<?php
  
 +// include class koneksi database
  include_once 'connection.php';
  	
 +	// inisialisasi nama class
  	
     class bukuajartambah {
  		
 +		// variabel untuk database
  		private $db;
  		private $connection;
  		
 +		// konstruktor
  		function __construct() {
  			$this -> db = new DB_Connection();
  			$this -> connection = $this->db->getConnection();
  		}
  				
 -		public function inputBukuajar($idbuku, $judul_buku, $tahun, $jumlah_halaman, $lingkup, $penerbit, $bukti_penulisan){
 -			$query = "INSERT INTO `buku_ajar` (id_buku, judul_buku, tahun, jumlah_halaman, lingkup, penerbit, bukti_penulisan) VALUES ('$idbuku','$judul_buku','$tahun','$jumlah_halaman','$lingkup','$penerbit','$bukti_penulisan')";
 -			$inserted = mysqli_query($this->connection, $query);
 -			mysqli_close($this->connection);
 +		// method untuk masukkan data ke database
 +		// $tahun, $judul, $sumberdana, $jumlahdana didapat dari kolom di tabel di database
 +       public function inputbukuajar($idbuku, $judul_buku, $tahun, $jumlah_halaman, $lingkup, $penerbit, $bukti_penulisan){
 +		   // query untuk insert
 +		   $query = "INSERT INTO `buku_ajar` (id_buku, judul_buku, tahun, jumlah_halaman, lingkup, penerbit, bukti_penulisan) VALUES ('$idbuku','$judul_buku','$tahun','$jumlah_halaman','$lingkup','$penerbit','$bukti_penulisan')";
 +		   // variabel untuk menjalankan fungsi insert
 +		   $inserted = mysqli_query($this->connection, $query);
 +		   // menutup koneksi
 +		   mysqli_close($this->connection);
  		}
  	}
 -			
 +	
 +// inisialisasi objek bukuajar				
  $bukuajar = new Bukuajar);
 +// $_POST['form-submit'] ==  Submit didapat dari 'name' dan 'value' dari button di form:
 +// <button id="send" type="submit" class="btn btn-success" name="form-submit" value="Submit">Submit</button>
  if($_POST['form-submit'] == "Submit"){
 +	// 'form-tahun' juga didapat dari 'name' di form:
 +	// <input id="name" class="form-control col-md-7 col-xs-12" name="form-tahun"  required="required" type="text">
 +	// dan seterusnya sampai semua dari form terpenuhi
      $idbuku = $_POST['form-idbuku'];
      $judubuku = $_POST['form-judul_buku'];
      $tahun = $_POST['form-tahun'];
      $jumlah_halaman = $_POST['form-jumlah_halaman'];
      $lingkup = $_POST['form-lingkup'];
      $penerbit = $_POST['form-penerbit'];
      $bukti_penulisan = $_POST['form-bukti_penulisan'];
 +	// variabel dummy untuk testing
 +	// menjalankan fungsi insert
      $bukuajar->inputBukuajar($idbuku, $judul_buku, $tahun, $jumlah_halaman, $lingkup, $penerbit, $bukti_penulisan);
  }
 +

  include 'content-home.php';
  
  ?>
