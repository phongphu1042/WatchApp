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

      <div class="container-fluid mt-3">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="active-member">
                  <div class="table-responsive">
                    <table class="table table-xs mb-0">
                      <thead>
                         <tr>
                              <th>id product</th>
                              <th>id user</th>
                              <th>date</th>
                              <th>Status</th>
                              <th>amount</th>
                              <th>Setting</th>
                          </tr>
                      </thead>
                      <tbody>
                      <tbody>
                       <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname="demo2";
                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT `order_id`, `user_id`, `order_date`, `order_status`, `amount` FROM `order`");
                            $stmt->execute();
                            $product= $stmt-> fetchALL(PDO::FETCH_ASSOC);
                            IF($product){
                                foreach($product as $product){
                                  echo'<form action="../controller/productController.php" method="POST" enctype="multipart/form-data" class="form-horizontal"';
                                    echo '<tr>';
                                    
                                    echo '<td name="txt_oder_id">'.$product['order_id'].'</td>';
                                    echo '<td name="txt_user_id"> <span class = "user_id">'.$product['user_id'].'</span> </td>';
                                    echo '<td name="txt_date"> <span class = "date">'.$product['order_date'].'</span> </td>';
                                    echo '<td name="txt_status">';
                                    echo '<span class = "type status">'.$product['order_status'].'</span>';
                                    echo '</td>';
                                    echo '<td name="txt_amount"> <span class = "amount">'.$product['amount'].'</span> </td>';
                                    echo '<td width="50px">';
                                    echo '<a href="producteditpage.php?edit='. $product['order_id'] .'" type = "button" class = "btn btn-success"><i class = "fa fa-edit"></i> Sửa</a>';
                                    echo '</td>';
                                    echo '<td width="50px">';
                                    echo '<a href="../controller/productController.php?delete='. $product['order_id'] .'" type = "button" class = "btn btn-danger" "  ><i class = "fa fa-times"></i> Xóa</a>';
                                    echo '</td>';
                                    echo '</tr>';
                                    echo '</form>';
                                }
                            }
                        }
                        catch(PDOException $e) {
                          echo "Error: " . $e->getMessage();
                            }
                            $conn = null;
                        ?>

                       
                      </tbody>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        






        <?php include 'layout/mxh.php'; ?>
      <!-- #/ container -->
  
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