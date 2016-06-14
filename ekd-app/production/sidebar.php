<html>
    <body>
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Menu:</h3>
                <ul class="nav side-menu">
                    <li><a href="<?php if($_SESSION['keterangan']=="Dosen"){ echo "content-home.php"; } else{ echo "content-home-tu.php"; } ?>"><i class="fa fa-edit"></i>Home <span class="fa fa-chevron-down"></span></a>
                    </li>
                    <li><a><i class="fa fa-edit"></i>Bukti Penugasan <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="pembimbingan_tabel.php">Upload Bukti Penugasan</a></li>
                            <li><a href="pembimbingan_tabel.php">Lihat Bukti Penugasan</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i>Cetak <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="pembimbingan_tabel.php">Lihat Data Pembimbingan</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i>Pendidikan Pengajaran <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="content-kegiatan-tambah.php">Tambah Mata Kuliah</a></li>
                            <li><a href="content-kegiatan-view.php">Lihat Data Mata Kuliah</a></li>
                            <li><a href="content-pendpeng-tambah.php">Tambah Data Pendidikan dan Pengajaran</a></li>
                            <li><a href="content-pengabdian-view.php">Lihat Data Pendidikan dan Pengajaran</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i>Pembimbingan <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="pembimbingan_tabel.php">Lihat Data Pembimbingan</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i>Penelitian <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="content-penelitian-tambah.php">Tambah Data Penelitian</a></li>
                            <li><a href="content-penelitian-view.php">Lihat Data Penelitian</a></li>
                            <li><a href="content-kegpenelitian-tambah.php">Tambah Data Kegiatan Penelitian</a></li>
                            <li><a href="content-kegpenelitian-view.php">Lihat Data Penelitian</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i>Pengabdian Masyarakat <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="content-pengabdian-tambah.php">Tambah Data Pengabdian Masyarakat</a></li>
                            <li><a href="content-pengabdian-view.php">Lihat Data Pengabdian Masyarakat</a></li>
                            <li><a href="content-kegpengabdian-tambah.php">Tambah Data Kegiatan Pengabdian Masyarakat</a></li>
                            <li><a href="content-kegpengabdian-view.php">Lihat Data Kegiatan Pengabdian Masyarakat</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i>Publikasi Ilmiah <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="content-publikasi-tambah.php">Tambah Publikasi Ilmiah</a></li>
                            <li><a href="content-publikasi-view.php">Lihat Data Publikasi Ilmiah</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i>Penulisan Buku <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="%">Tambah Buku Ajar</a></li>
                            <li><a href="%">Tambah Data Penulisan Buku Ajar</a></li>
                            <li><a href="%">Tambah Data Penulisan Buku Referensi</a></li>
                            <li><a href="%">Lihat Data Penulisan Buku Ajar</a></li>
                            <li><a href="%">Lihat Data Penulisan Referensi</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i>Pembicara Ahli <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="%">Tambah Data Pembicara Ahli dalam Seminar</a></li>
                            <li><a href="%">Lihat Data Pembicara Ahli dalam Seminar</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i>Perolehan HAKI <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="content-haki-tambah.php">Tambah Data HAKI</a></li>
                            <li><a href="content-haki-view.php">Lihat Data HAKI</a></li>
                            <li><a href="content-perolehanhaki-tambah.php">Tambah Data Perolehan HAKI</a></li>
                            <li><a href="content-perolehanhaki-view.php">Lihat Data Perolehan HAKI</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i>Tugas Belajar <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="%">Tambah Data Tugas Belajar</a></li>
                            <li><a href="%">Lihat Data Tugas Belajar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>