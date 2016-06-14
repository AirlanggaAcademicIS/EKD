<html>
    <body>
        <?php 
        if(!isset($_SESSION)){
            
        }
        ?>
        <!-- menu prile quick info -->
        <div class="profile">
            
            <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['user']; ?></h2>
            </div>
        </div>
        <!-- /menu prile quick info -->
    </body>
</html>