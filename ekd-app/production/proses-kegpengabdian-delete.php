<?php 
                          include_once 'connection.php';
                          
                          $db = new DB_Connection();
			              $connection = $db->getConnection();
                          
                          $query="DELETE FROM kegiatanpengabdianmasyarakat WHERE IDKEGIATANPENGABDIANMASYARAKAT= ".$_GET['id']."";

                          $result=mysqli_query($connection, $query);
                          
                          $data2 = mysqli_fetch_array($result);
           
header("Location: content-kegpengabdian-view.php");
                          
?>