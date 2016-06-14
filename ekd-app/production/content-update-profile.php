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
        <?php 
        if(!isset($_SESSION)){
            session_start();
        }
        ?>
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"> <span>Universitas Airlangga</span></a>
                        </div>
                        <div class="clearfix"></div>
                        
                        <!-- menu prile quick info -->
                        <?php include 'profile-quick.php'; ?>
                        <!-- /menu prile quick info -->
                        
                        <br />
                        
                        <!-- sidebar menu -->
                        <?php 
                        include 'sidebar.php';
                        ?>
                        <!-- /sidebar menu -->
                    </div>
                </div>
                
                <!-- top navigation -->
                <?php include 'nav-top.php'; ?>
                <!-- /top navigation -->

          <!-- page content -->
          <div class="right_col" role="main">

            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>
                        Form Update Profile
                  </h3>
                </div>

              </div>
              <div class="clearfix"></div>

                      <form action="proses-user-update.php" method="post" class="form-horizontal form-label-left" novalidate>
                          
                          <?php if($_SESSION['keterangan'] == "Tata Usaha"){
    echo '<div class="item form-group">';
    echo '<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Nama Dosen <span class="required">*</span>';
    echo '</label>';
    echo '<div class="col-md-6 col-sm-6 col-xs-12">';
    echo '<select name="form-nip" id="form-lingkup" class="form-control" required>';
    echo '<option value="">Pilih Dosen </option>';
    include 'populate-user.php';
    echo '</select>';
    echo '</div>';
    echo '</div>';
} else {
    echo '<input id="name" value = "'.$_SESSION['user'].'" name="form-nip"  required="required" type="hidden">';
    
}
                ?>
                          
                          <?php 
                          include_once 'connection.php';
                          
                          $db = new DB_Connection();
			              $connection = $db->getConnection();
                          
                          $query="SELECT * FROM user WHERE NIP=".$_SESSION['user']."";
                          
                          $result=mysqli_query($connection, $query);
                          
                          $data2 = mysqli_fetch_array($result);
                                  
                          
                          ?>
                          
                          
                          
                            <input id="name" value="<?php echo $data2['NIP']; ?>" class="form-control col-md-7 col-xs-12" name="form-nip"  required="required" type="hidden">
                          
                        
                          
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">NIDN <span class="notblank">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" value="<?php echo $data2['NIDN']; ?>" class="form-control col-md-7 col-xs-12" name="form-nidn"  required="required" type="text">
                          </div>
                        </div>
                          
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama <span class="notblank">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" value="<?php echo $data2['NAMA']; ?>" class="form-control col-md-7 col-xs-12" name="form-nama"  required="required" type="text">
                          </div>
                        </div>
                          
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Pangkat <span class="notblank">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" value="<?php echo $data2['PANGKAT']; ?>" class="form-control col-md-7 col-xs-12" name="form-pangkat"  required="required" type="text">
                          </div>
                        </div>
                          
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Golongan <span class="notblank">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" value="<?php echo $data2['GOLONGAN']; ?>" class="form-control col-md-7 col-xs-12" name="form-gol"  required="required" type="text">
                          </div>
                        </div>
                        
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Jabatan Fungsional <span class="notblank">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" value="<?php echo $data2['JABFUNGSIONAL']; ?>" class="form-control col-md-7 col-xs-12" name="form-jabfungsional"  required="required" type="text">
                          </div>
                        </div>
                          
                          <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Pendidikan Akhir <span class="notblank">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" value="<?php echo $data2['PENDAKHIR']; ?>" class="form-control col-md-7 col-xs-12" name="form-pendakhir"  required="required" type="text">
                          </div>
                        </div>
                          
                          <?php
                          
                          if($_SESSION['keterangan']=="Tata Usaha"){
                              echo '<div class="item form-group">';
                              echo '<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Bukti Penugasan <span class="required">*</span>';
                              echo '</label>';
                              echo '<div class="col-md-6 col-sm-6 col-xs-12">';
                              echo '<select name="form-keterangan" class="form-control" required>';
                              echo '<option value="">Pilih Bukti Keterangan User </option>';
                              echo '<option value="Tata Usaha">Tata Usaha</option>';
                              echo '<option value="Dosen">Dosen</option>';
                              echo '</select>';
                              echo '</div>';
                              echo '</div>';
                          }
                          ?>
                        
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-3">
                            <button id="send" type="submit" class="btn btn-success" name="form-submit" value="Submit">Simpan Profile Saya</button>
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
