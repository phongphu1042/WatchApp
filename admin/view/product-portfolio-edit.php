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
                                        $username = "doan";
                                        $password = "";
                                        $dbname="demo2";
                                        try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $stmt = $conn->prepare("SELECT `type_id`, `type_name` FROM `type`  WHERE type_id=:type_id");
                                            $stmt->bindParam(':type_id', $id);
                                            $stmt->execute();
                                            $product= $stmt-> fetchALL(PDO::FETCH_ASSOC);
                                            IF($product){
                                                foreach($product as $product){
                                                    echo '<form action="../controller/product-portfolio-controller.php" method="POST" enctype="multipart/form-data" class="form-horizontal">';
                                                    echo '<div class="row form-group">';
                                                    echo '<div class="col col-md-3"><label for="text-input" class=" form-control-label">id</label></div>';
                                                    echo '<div class="col-12 col-md-9"><input type="text" value="'.$product['type_id'].'" id="txt_id" name="txt_id" class="form-control"></div>';
                                                    echo '</div>';
                                                    echo '<div class="row form-group">';
                                                        echo '<div class="col col-md-3"><label for="text-input" class=" form-control-label">product name</label></div>';
                                                        echo '<div class="col-12 col-md-9"><input type="text" value="'.$product['type_name'].'" id="txt_name" name="txt_name" class="form-control"></div>';
                                                    echo '</div>';
                                                    echo '<div>';
                                                        echo '<a href="../controller/product-portfolio-controller.php?update='. $id .' type = "button" class="btn btn-primary btn-sm">
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