<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php include 'layout/headerpage.php'; ?>
</head>

<body>
    <header>
        <!-- Header Start -->
        <?php include 'layout/header1page.php'; ?>
        <!-- Header End -->
    </header>
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Watch Shop</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================Single Product Area =================-->
        <div class="product_image_area">
            <div class="container">
                <?php
                include '../utils/MySQLUtil.php';
                $dbCon = new MySQLUtil();
                $param = array();
                if (isset($_GET['product_id'])) {
                    $query = "select * from product where product_id=?";
                    $param[] = $_GET['product_id'];
                } else {
                    $query = "select * from product";
                }
                $dbCon->getPrDetails($query, $param);
                ?>


                

            </div>
        </div>

        <!--================End Single Product Area =================-->
        <!-- subscribe part here -->
        <div class="video-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="video-wrap">
                            <div class="play-btn "><a class="popup-video" href="https://www.youtube.com/watch?v=KMc6DyEJp04"><i class="fas fa-play"></i></a></div>
                        </div>
                    </div>
                </div>
                <!-- Arrow -->
                <div class="thumb-content-box">
                    <div class="thumb-content">
                        <h3>Next Video</h3>
                        <a href="#"> <i class="flaticon-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- subscribe part end -->
    </main>
    <footer>
        <!-- Footer Start-->
        <?php include 'layout/footerpage.php'; ?>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <?php include 'layout/search.php'; ?>
    <!-- Search model end -->

    <!-- JS here -->

    <?php include 'layout/scriptpage.php'; ?>

</body>

</html>