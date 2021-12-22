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
                                    <form action="../controller/usersController.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">id</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="txt_id" name="txt_id" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">name</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="txt_name" name="txt_name" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">email</label></div>
                                            <div class="col-12 col-md-9"><input id="txt_email" name="txt_email" class="form-control" require></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">password</label></div>
                                            <div class="col-12 col-md-9"><input id="txt_pass" name="txt_pass" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">phone</label></div>
                                            <div class="col-12 col-md-9"><input id="txt_phone" name="txt_phone" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Adress</label></div>
                                            <div class="col-12 col-md-9"><input id="txt_adress" name="txt_adress" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">

                                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Avatar</label></div>
                                            <div class="col-12 col-md-9"><input type="file" name="fileToUpload" id="fileToUpload" class="form-control-file"></div>

                                        </div>
                                        <div>
                                            <button id="btn_test" name="user_group_action" value="user_create" type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Create
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