<?php

class MySQLUtil
{
    private $servername;
    private $username;
    private $password;
    private $myDB;
    private static $conn;
    public function __construct()
    {
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->myDB="doan";   
        $this->connectDB();

    }
    public function __destruct()
    {
        $this->servername="";
        $this->username="";
        $this->password="";
        $this->myDB="";
        self::$conn == NULL;
    }

    public function connectDB()
    {
        try {
            self::$conn = new PDO("mysql:host=$this->servername;dbname=$this->myDB", $this->username, $this->password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        } 
    }
    public function disConnectDB(){
      
        self::$conn==NULL;
    }


    //Product
    public function getDataPr($query, $param = array())
    {
        $stmt = self::$conn->prepare($query);
        $stmt->execute($param);
        while ($pr = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">';
            echo '<div class="single-new-pro mb-30 text-center"> ';
            echo '<div class="product-img">';
            echo '<a href="product_details.php?product_id=' . $pr['product_id'] . '"><img src="assets/img/gallery/' . explode(',', $pr['avtar'])[0] . '" alt=""></a> ';
            echo '</div>';
            echo '<div class="product-caption"> ';
            echo '<h3><a href="product_details.php?product_id=' . $pr['product_id'] . '">' . $pr['product_name'] . '</a></h3>';
            echo '<span>' . number_format($pr['price']) . ' VND</span> ';
            echo '</div>';
            echo '</div> ';
            echo '</div>';
        }
    }
    public function getDataPr2($query, $param = array()){
        $stmt = self::$conn->prepare($query);
        $stmt->execute($param);
        while ($pr = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">';
            echo '<div class="single-popular-items mb-50 text-center"> ';
            echo '<div class="popular-img">';
            echo '<a href="product_details.php?product_id=' . $pr['product_id'] . '"><img src="assets/img/gallery/' . explode(',', $pr['avtar'])[0] . '" alt=""></a> ';
            echo '<div class="img-cap">';
            echo '<span>Add to cart</span> ';
            echo '</div>';
            echo '<div class="favorit-items"> ';
            echo '<span class="flaticon-heart"></span>';
            echo '</div> ';
            echo '</div>';
            echo '<div class="popular-caption"> ';
            echo '<h3><a href="product_details.php?product_id=' . $pr['product_id'] . '">' . $pr['product_name'] . '</a></h3>';
            echo '<span>' . number_format($pr['price']) . ' VND</span> ';
            echo '</div>';
            echo '</div> ';
            echo '</div>';
        }
    }
    public function getType($query)
    {
        $stmt = self::$conn->prepare($query);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<a class="nav-item nav-link active" id="nav-home-tab"  href="shop.php?type_id=' . $row['type_id'] . '" role="tab" aria-controls="nav-home" aria-selected="false">' . $row['type_name'] . '</a>';
        }
    }
    public function getPage($query, $param = array())
    {
        $stmt = self::$conn->prepare($query);
        $stmt->execute($param);
        $tong = $stmt->fetchColumn();
        $sotrang = ceil($tong / 6);
        echo ' <div class="select-this">';
        echo '<form action="#"> ';
        echo '<div class="custom-pagination">';
        echo '<ul class="pagination"> ';
        if (isset($_GET['type_id']))
        for ($i = 1; $i <= $sotrang; $i++)
            echo ' <li class="page-item"><a class="page-link" href="shop.php?type_id=' . $_GET['type_id'] . '&page=' . $i . '">' . $i . '</a></li> ';

        else {
            for ($i = 1; $i <= $sotrang; $i++)
                echo ' <li class="page-item"><a class="page-link" href="shop.php?page=' . $i . '">' . $i . '</a></li> ';
        }
        echo '</ul> ';
        echo '</div>';
        echo '</form> ';
        echo '</div>';
    }
    public function getPrDetails($query, $param = array())
    {
        $stmt = self::$conn->prepare($query);
        $stmt->execute($param);
        $pr = $stmt->fetch(PDO::FETCH_ASSOC);
        echo '<div class="row s_product_inner">';
        echo '<div class="col-lg-6"> ';
        echo '<div class="product_img_slide owl-carousel">';
        echo '<div class="single_product_img"> ';
        echo '<img src="assets/img/gallery/' . explode(',', $pr['avtar'])[0] . '" alt="#" class="img-fluid">';
        echo '</div> ';
        echo '<div class="single_product_img">';
        echo '<img src="assets/img/gallery/' . explode(',', $pr['avtar'])[0] . '" alt="#" class="img-fluid"> ';
        echo '</div>';
        echo '<div class="single_product_img"> ';
        echo '<img src="assets/img/gallery/' . explode(',', $pr['avtar'])[0] . '" alt="#" class="img-fluid">';
        echo '</div> ';
        echo '</div>';
        echo '</div> ';
        echo '<div class="col-lg-5 offset-lg-1">';
        echo '<div class="s_product_text"> ';
        echo '<h3>' . $pr['product_name'] . '</h3>';
        echo '<h2>' . number_format($pr['price']) . ' VNĐ</h2> ';
        echo '<div class="card_area"> ';
        echo '<div class="product_count_area"> ';
        echo '<p>Quantity</p> ';
        echo '<div class="product_count d-inline-block"> ';
        echo '<span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>';
        echo '<input class="product_count_item input-number" type="text" value="1" min="0" max="10"> ';
        echo '<span class="product_count_item number-increment"> <i class="ti-plus"></i></span>';
        echo '</div> ';
        echo '<p>' . number_format($pr['price']) . ' VNĐ</p>';
        echo '</div>';
        echo '<div class="add_to_cart">';
        echo '<a href="#" class="btn_3">add to cart</a> ';
        echo '</div>';
        echo '</div> ';
        echo '</div>';
        echo '</div> ';
        echo '</div>';
    }

}
