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

}
