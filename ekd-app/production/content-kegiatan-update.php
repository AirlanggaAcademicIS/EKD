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
                        Form Edit Kegiatan
                  </h3>
                </div>

             </div>
              <div class="clearfix"></div>
                
                <?php 
                          include_once 'connection.php';
                          
                          $db = new DB_Connection();
			              $connection = $db->getConnection();
                          
                          $query="SELECT * FROM kegiatan WHERE IDKEGIATAN=".$_GET['id']."";
                          
                          $result=mysqli_query($connection, $query);
                          
                          $data2 = mysqli_fetch_array($result);
                                  
                          
                          ?>
                
                      <form action="proses-kegiatan-update.php" method="post" class="form-horizontal form-label-left" novalidate>              
                          <input id="name" value = "<?php echo $data2['IDKEGIATAN']?>" name="form-id"  required="required" type="hidden">
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kode MK <span class="notblank">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" value = "<?php echo $data2['KODEMK']?>" name="form-kode"  required="required" type="text">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Kegiatan <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="email" name="form-nama" value = "<?php echo $data2['NAMAKEGIATAN']?>" placeholder="Nama Kegiatan" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">SKS Kegiatan <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="number" name="form-sks" value = "<?php echo $data2['SKSKEGIATAN']?>" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-3">
                            <button id="send" type="submit" class="btn btn-success" name="form-submit" value="Submit">Update Kegiatan</button>
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
