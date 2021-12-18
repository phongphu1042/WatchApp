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
        <!-- Latest Products Start -->
        <section class="popular-items latest-padding">
            <div class="container">
                <div class="row product-btn justify-content-between mb-40">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                    <!-- Grid and List view -->
                    <div class="grid-list-view">
                    </div>
                    <!-- Select items -->
                    

                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <?php
             
                            if (isset($_GET['page']))
                                $page = $_GET['page'];
                            if (isset($_GET['type_id'])) {
                                $query = "select * from product where type_id=?";
                                $param[] = $_GET['type_id'];
                            } else
                                $query = "select * from product";
                            $query .= ' limit ' . ($page - 1) * 6 . ',' . 6;
                            $dbCon->getDataPr2($query, $param);

                            ?>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->
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
    <!-- All JS Custom Plugins Link Here here -->
    <?php include 'layout/scriptpage.php'; ?>

</body>

</html>