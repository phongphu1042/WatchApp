<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'layout/header.php'; ?>

</head>

<body>

  <!--*******************
        Preloader start
    ********************-->
  <?php include 'layout/Preloader_start.php'; ?>
  <!--*******************
        Preloader end
    ********************-->


  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">

    <!--**********************************
            Nav header start
        ***********************************-->
     <?php include 'layout/Nav_header_start.php'; ?>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->
     <?php include 'layout/Header_start.php'; ?>
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
     <?php include 'layout/Sidebar_start.php'; ?>
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <?php
                                        if(isset($_GET['edit']))
                                        $id=$_GET['edit'];
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname="demo2";
                                        try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $stmt = $conn->prepare("SELECT `user_id`, `user_name`, `user_email`, `user_pass`, `user_phone`, `user_address` FROM `user`  WHERE user_id=:user_id");
                                            $stmt->bindParam(':user_id', $id);
                                            $stmt->execute();
                                            $user= $stmt-> fetchALL(PDO::FETCH_ASSOC);
                                            IF($user){
                                                foreach($user as $user){
                                                    echo '<form action="../controller/productController.php" method="POST" enctype="multipart/form-data" class="form-horizontal">';
                                                    echo '<div class="row form-group">';
                                                    echo '<div class="col col-md-3"><label for="text-input" class=" form-control-label">id</label></div>';
                                                    echo '<div class="col-12 col-md-9"><input type="text" value="'.$user['user_id'].'" id="txt_id" name="txt_id" class="form-control"></div>';
                                                    echo '</div>';
                                                    echo '<div class="row form-group">';
                                                        echo '<div class="col col-md-3"><label for="text-input" class=" form-control-label">User name</label></div>';
                                                        echo '<div class="col-12 col-md-9"><input type="text" value="'.$user['user_name'].'" id="txt_name" name="txt_name" class="form-control"></div>';
                                                    echo '</div>';
                                                    echo '<div class="row form-group">';
                                                        echo '<div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>';
                                                        echo '<div class="col-12 col-md-9"><input id="txt_price" value="'.$user['user_email'].'" name="txt_gmail" class="form-control" require></div>';
                                                    echo '</div>';
                                                   echo ' <div class="row form-group">';
                                                        echo '<div class="col col-md-3"><label for="password-input" class=" form-control-label">Phone</label></div>';
                                                        echo '<div class="col-12 col-md-9"><input  id="txt_status" value="'.$user['user_phone'].'" name="txt_phone" class="form-control"></div>';
                                                    echo '</div>';
                                                    echo ' <div class="row form-group">';
                                                        echo '<div class="col col-md-3"><label for="password-input" class=" form-control-label">Address</label></div>';
                                                        echo '<div class="col-12 col-md-9"><input  id="txt_status" value="'.$user['user_address'].'" name="txt_adress" class="form-control"></div>';
                                                    echo '</div>';
                                                    echo '<div>';
                                                        echo '<a href="../controller/usersController.php?update='. $id .' type = "button" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Update';
                                                        echo '</a>';
                                                        
                                                    echo '</div>';
                                                    echo '</form>';
                                                }
                                            }
                                        }
                                        catch(PDOException $e) {
                                        echo "Error: " . $e->getMessage();
                                        }
                                        $conn = null;
                                      ?>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
       <?php include 'layout/Footer.php'; ?>
    <!--**********************************
            Footer end
        ***********************************-->
 
  <!--**********************************
        Main wrapper end
    ***********************************-->

  <!--**********************************
        Scripts
    ***********************************-->
  <?php include 'layout/Scripts.php'; ?>

</body>

</html>