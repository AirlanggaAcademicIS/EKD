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
              <img src="images/Jessy.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Hansel</h2>
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
                    <li><a href="pembimbingan_tabel.php">Entry Data Pembimbingan</a>
                    </li>
                      <li><a href="publikasi_ilmiah_nasional.php">Entry Data Publikasi Ilmiah Nasional</a>
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
                    <li><a href="pembicara.html">Pembicara</a>
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

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Form Pembimbingan
                </h3>
            </div>

          </div>
          <div class="clearfix"></div>
            
            <form action="proses-pembimbingan-tambah.php" method="post" class="form-horizontal form-label-left" novalidate>

                  <form class="form-horizontal form-label-left" novalidate>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Mahasiswa <span class="notblank">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" name="form-nama_mhs" placeholder="Isi dengan nama panjang" required="required" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nomor Induk Mahasiswa <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" name="form-nim_mhs" required="required" type="text">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Judul Skripsi/TA <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" name="form-judul" required="required" type="text">
<!--
                           <form action ="">
                              <input type = "radio" name="gender" value  ="male"> Male<br>
                          </form>
-->
                      </div>
                    </div>
    
                      
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Pembimbing 1 <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
<!--                        <input id="pembimbing1" class="form-control col-md-7 col-xs-12" name="pembimbing1" required="required" type="text">-->
<!--option DB-->
                          <select class="form-control col-md-7 col-xs-12" input id="name" required="required" name="form-pembimbing1">

                          <option value ="">
                          <?php 
                          include_once 'connection.php';
                          
                          $db = new DB_Connection();
			              $connection = $db->getConnection();
                          
                          $query="SELECT nama FROM user";
                          
                          $result=mysqli_query($connection, $query);
                              if(mysqli_num_rows($result)>0){
                                  while($data = mysqli_fetch_array($result)){
                                      
                                      echo "<option value=\"".$data['nama']."\"";
                              if(isset($_POST['form-pembimbing1']))
                                  if($_POST['form-pembimbing1']==$data['nama']){
                                      
                                      echo "selected=\"selected\"";
                                      
                                  }
                          
                              echo ">".$data['nama']."</option>";
                                  }
                                  
                              }
                          
                          ?> 
                        </option>   
                      </select>
<!--option DB-->
                        </div>
                    </div>
                      
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Pembimbing 2 <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
<!--                        <input id="pembimbing2" class="form-control col-md-7 col-xs-12" name="pembimbing2" required="required" type="text">-->
                     <select class="form-control col-md-7 col-xs-12" input id="name" required="required" name="form-pembimbing2">

                          <option value ="">
                          <?php 
                          include_once 'connection.php';
                          
                          $db = new DB_Connection();
			              $connection = $db->getConnection();
                          
                          $query="SELECT nama FROM user";
                          
                          $result=mysqli_query($connection, $query);
                              if(mysqli_num_rows($result)>0){
                                  while($data = mysqli_fetch_array($result)){
                                      
                                      echo "<option value=\"".$data['nama']."\"";
                              if(isset($_POST['form-pembimbing2']))
                                  if($_POST['form-pembimbing2']==$data['nama']){
                                      
                                      echo "selected=\"selected\"";
                                      
                                  }
                          
                              echo ">".$data['nama']."</option>";
                                  }
                                  
                              }
                          
                          ?> 
                        </option>   
                      </select>
                        
                        </div>
                    </div>
                      
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Bukti SK <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
<!--                        <input id="pembimbing2" class="form-control col-md-7 col-xs-12" name="pembimbing2" required="required" type="text">-->
                        <select class="form-control col-md-7 col-xs-12" input id="name" required="required" name="bukti-sk">

                          <option value ="">
                          <?php 
                          include_once 'connection.php';
                          
                          $db = new DB_Connection();
			              $connection = $db->getConnection();
                          
                          $query="SELECT * FROM buktipenugasan";
                          
                          $result=mysqli_query($connection, $query);
                              if(mysqli_num_rows($result)>0){
                                  while($data = mysqli_fetch_array($result)){
                                      
                                      echo "<option value=\"".$data['KETERANGAN']."\"";
                              if(isset($_POST['form-bukti_sk']))
                                  if($_POST['form-bukti_sk']==$data['KETERANGAN']){
                                      
                                      echo "selected=\"selected\"";
                                      
                                  }
                          
                              echo ">".$data['KETERANGAN']."</option>";
                                  }
                                  
                              }
                          
                          ?> 
                        </option>   
                      </select>
                        </div>
                    </div>
                      
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <button id="send" type="submit" class="btn btn-success" name="form-submit" value="Submit">Submit</button>
                      </div>
                    </div>
                  </form>
        </div>

        <!-- footer content -->
        <footer>
          <div class="clearfix"></div>
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
  <script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
      .on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);
//VALIDATOR
    $('form').submit(function(e) {
      e.preventDefault();
      var submit = true;
      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
        submit = false;
      }

      if (submit)
        this.submit();
      return false;
    });
//VALIDATOR
    /* FOR DEMO ONLY */
    $('#vfields').change(function() {
      $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function() {
      validator.defaults.alerts = (this.checked) ? false : true;
      if (this.checked)
        $('form .alert').remove();
    }).prop('checked', false);
  </script>

</body>

</html>
