<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>EKD Universitas Airlangga </title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">


  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<script type="text/javascript">
$(document).ready(function() {
    var max_fields      = 1000; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group"><div class="col-xs-3"><input type="text" class="form-control" name="pengajaran[0].nama" placeholder="Pembina" /></div><div class="col-xs-2"><input type="text" class="form-control" name="pengajaran[0].KODEMK" placeholder="Kode MK" /></div><div class="col-xs-3"><input type="text" class="form-control" name="pengajaran[0].NAMAKEGIATAN" placeholder="Nama MK" /></div><div class="col-xs-1"> <input type="text" class="form-control" name="pengajaran[0].SKSKEGIATAN" placeholder="SKS" /></div><div class="col-xs-1"><input type="text" class="form-control" name="pengajaran[0].JUMLAHKELAS" placeholder="Jumlah Kelas" /></div><div class="col-xs-1"><input type="text" class="form-control" name="pengajaran[0].BEBAN" placeholder="Beban %" /></div><button type="button" class="btn btn-default add_field_button"><i class="fa fa-minus"></i></button></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
    </script>
</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"> <span>Universitas Airlangga</span></a>
          </div>
          <div class="clearfix"></div>


          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Bramantyo</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Entry Data SK <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="content-pengajaran-view.html">Entry Data Pengajaran</a>
                    </li>
                    <li><a href="pembimbingan.html">Entry Data Pembimbingan</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Entry Data Pribadi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="penelitian.html">Penelitian</a>
                    </li>
                    <li><a href="pengabdian.html">PEngabdian Masyarakat</a>
                    </li>
                    <li><a href="publikasi.html">Publikasi Ilmiah</a>
                    </li>
                    <li><a href="penulisan_ajar.html">Penulisan Buku Ajar</a>
                    </li>
                    <li><a href="penulisan_referensi.html">Penulisan Buku Referensi</a>
                    </li>
                    <li><a href="content-pembicara-view.html">Pembicara</a>
                    </li>
                    </li>
                    <li><a href="perolehan_haki.html">Perolehan HAKI</a>
                    </li>
                  <li><a href="tugas_belajar.html">Tugas Belajar</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Pengajaran</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah SK Pengajaran
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body"><div class="form-group">
        <div class="clearfix"><label class="col-xs-1 control-label">Nomor SK</label><div class="col-lg-12">
            <input type="text" class="form-control" name="pengajaran[0].IDPENDIDIKANPENGAJARAN" placeholder="Nomor SK" /></div></div>
                            
                            <div class="input_fields_wrap"><div class="form-group">
        <div class="col-xs-3">
            <input type="text" class="form-control" name="pengajaran[0].nama" placeholder="Pembina" />
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control" name="pengajaran[0].KODEMK" placeholder="Kode MK" />
        </div>
        <div class="col-xs-3">
            <input type="text" class="form-control" name="pengajaran[0].NAMAKEGIATAN" placeholder="Nama MK" />
        </div>
        <div class="col-xs-1">
            <input type="text" class="form-control" name="pengajaran[0].SKSKEGIATAN" placeholder="SKS" />
        </div>
        <div class="col-xs-1">
            <input type="text" class="form-control" name="pengajaran[0].JUMLAHKELAS" placeholder="Jumlah Kelas" />
        </div>
        <div class="col-xs-1">
            <input type="text" class="form-control" name="pengajaran[0].BEBAN" placeholder="Beban %" />
        </div>
            <button type="button" class="btn btn-default add_field_button"><i class="fa fa-plus"></i></button>
    </div></div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content -->
        <footer>
        </footer>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- form validation -->
  <script src="js/validator/validator.js"></script>

</body>

</html>
