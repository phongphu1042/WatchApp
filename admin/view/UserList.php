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
     <?php include 'layout/Header_start1.php'; ?>
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
                              <th>Image</th>
                              <th>id</th>
                              <th>Name</th>
                              <th>email</th>
                              <th>phone</th>
                              <th>address</th>
                              <th>Setting</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname="doan";
                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT `user_id`, `user_name`, `user_email`, `user_pass`, `user_phone`, `user_address` FROM `user`");
                            $stmt->execute();
                            $user= $stmt-> fetchALL(PDO::FETCH_ASSOC);
                            IF($user){
                              
                                foreach($user as $user){
                                  echo'<form action="../controller/usersController.php" method="POST" enctype="multipart/form-data" class="form-horizontal"';
                                    echo '<tr>';
                                    echo '<td class = "avatar">';
                                    echo '<div class = "round-img">';
                                    echo '<a href = "#"><img class = "rounded-circle" src = "images/1.jpg" alt = ""></a>';
                                    echo '</div>';
                                    echo '</td>';
                                    echo '<td name="txt_id">'.$user['user_id'].'</td>';
                                    echo '<td name="txt_name"> <span class = "name">'.$user['user_name'].'</span> </td>';
                                    echo '<td name="txt_email"> <span class = "price">'.$user['user_email'].'</span> </td>';
                                    echo '<td name="txt_phone">';
                                    echo '<span class = "type phone">'.$user['user_phone'].'</span>';
                                    echo '</td>';
                                    echo '<td name="txt_adress"> <span class = "adress">'.$user['user_address'].'</span> </td>';
                                    echo '<td width="50px">';
                                    echo '<a href="userseditpage.php?edit='. $user['user_id'] .'" type = "button" class = "btn btn-success"><i class = "fa fa-edit"></i> Sửa</a>';
                                    echo '</td>';
                                    echo '<td width="50px">';
                                    echo '<a href="../controller/usersController.php?delete='. $user['user_id'] .'" type = "button" class = "btn btn-danger" "  ><i class = "fa fa-times"></i> Xóa</a>';
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
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       <?php include 'layout/pagination.php'; ?>




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