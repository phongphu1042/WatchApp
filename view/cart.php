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
                <h2>Cart List</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================Cart Area =================-->

    <section class="cart_area section_padding">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">

            <form action="cart.php?action=submit" method="POST" enctype="multipart/form-data">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  // if (!isset($_SESSION['cart'])) {
                  //   $_SESSION['cart'] = array();
                  // }
                  // if (isset($_GET['action'])) {
                  //   switch ($_GET['action']) {
                  //     case "add":
                  //       foreach ($_POST['txtsoluong'] as $id => $Soluong) {
                  //         $_SESSION['cart'][$id] = $Soluong;
                  //         var_dump($_SESSION['cart']);exit;
                  //       }
                  //       break;
                  //   }
                  // }
                  // if (!empty($_SESSION['cart'])) {
                  //   //$sql = "SELECT * FROM xe WHERE maxe IN ('SH150', 'AB19')";
                  //   $sql = "SELECT * FROM product WHERE product_id IN (" . implode(",", array_keys($_SESSION['cart'])) . ")";
                  //   implode(",", array_keys($_SESSION['cart']));
                  //   exit;
                  //   $stmt = $conn->prepare($sql);
                  //   $stmt->execute();
                  //   /* $cart=$stmt->fetchAll(PDO::FETCH_ASSOC); */
                  // }
                  if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $value) :
                      echo '<tr>';
                      echo '<td> ';
                      echo '<div class="media">';
                      echo '<div class="d-flex"> ';
                      echo '<img src="assets/img/gallery/' . explode(',', $value['avtar'])[0] . '" alt="" />';
                      echo '</div> ';
                      echo '<div class="media-body">';
                      echo '<p>' . $value['product_name'] . '</p> ';
                      echo '</div>';
                      echo '</div> ';
                      echo '</td>';
                      echo '<td> ';
                      echo '<h5>' . number_format($value['price'])  . '</h5>';
                      echo '</td> ';
                      echo '<td>';
                      echo '<div class="product_count">';
                      echo '<div class="qty">';
                      echo '<a href="../controller/CartContffoller.php?id=' . $key . '&btn_qty=-1"><button class="btn-minus" name="qty_minus"><i class="fa fa-minus"></i></button></a>';
                      echo '<input type="text" name="qty_value" value="' . $_SESSION['cart'][$key]['qty_value'] . '"> ';
                      echo '<a href="../controller/CartController.php?id=' . $key . '&btn_qty=1"><button class="btn-plus" name="qty_plus"><i class="fa fa-plus"></i></button></a> ';
                      echo '</div>';
                      echo '</div> ';
                      echo '</td>';
                      echo '<td> ';
                      echo '<h5>' . number_format($value['price'] * $_SESSION['cart'][$key]['qty_value']) . '</h5>';
                      echo '</td>';
                      echo '</tr> ';

                    endforeach;
                  }


                  ?>

                  <tr class="bottom_button">
                    <td>
                      <a class="btn_1" href="#">Update Cart</a>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                      <div class="cupon_text float-right">
                        <a class="btn_1" href="#">Close Coupon</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <h5>Subtotal</h5>
                    </td>
                    <td>
                      <h5>$2160.00</h5>
                    </td>
                  </tr>
                  <tr class="shipping_area">
                    <td></td>
                    <td></td>
                    <td>
                      <h5>Shipping</h5>
                    </td>
                    <td>
                      <div class="shipping_box">
                        <ul class="list">
                          <li>
                            Flat Rate: $5.00
                            <input type="radio" aria-label="Radio button for following text input">
                          </li>
                          <li>
                            Free Shipping
                            <input type="radio" aria-label="Radio button for following text input">
                          </li>
                          <li>
                            Flat Rate: $10.00
                            <input type="radio" aria-label="Radio button for following text input">
                          </li>
                          <li class="active">
                            Local Delivery: $2.00
                            <input type="radio" aria-label="Radio button for following text input">
                          </li>
                        </ul>
                        <h6>
                          Calculate Shipping
                          <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </h6>
                        <select class="shipping_select">
                          <option value="1">Bangladesh</option>
                          <option value="2">India</option>
                          <option value="4">Pakistan</option>
                        </select>
                        <select class="shipping_select section_bg">
                          <option value="1">Select a State</option>
                          <option value="2">Select a State</option>
                          <option value="4">Select a State</option>
                        </select>
                        <input class="post_code" type="text" placeholder="Postcode/Zipcode" />
                        <a class="btn_1" href="#">Update Details</a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="checkout_btn_inner float-right">
                <a class="btn_1" href="#">Continue Shopping</a>
                <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
              </div>
            </form>
          </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
  </main>>
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