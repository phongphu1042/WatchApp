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