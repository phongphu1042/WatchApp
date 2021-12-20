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
                                    <form action="productcontroller.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">id đơn hàng</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="txt_iddh" name="txt_iddh" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">id khách hàng</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="txt_idkh" name="txt_idkh" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">ngày</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="txt_ngay" name="txt_ngay" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">price</label></div>
                                            <div class="col-12 col-md-9"><input id="txt_price" name="txt_price" class="form-control" require></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">status</label></div>
                                            <div class="col-12 col-md-9"><input  id="txt_status" name="txt_status" class="form-control"></div>
                                        </div>
                                       
                                        <div>
                                            <button name="product_group_action" value="product_create" type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Create
                                            </button>
                                            <button name="btn_reset" type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </div>
                                    </form>
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