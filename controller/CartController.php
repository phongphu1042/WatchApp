<?php

    session_start();

    
    
    $id =isset($_GET["id"])?$_GET["id"]:'';
    if(isset($_SESSION['cart']))
    {
        if ($_GET["btn_qty"]==0) {
            unset($_SESSION['cart'][$id]);
        }
        else{
            switch ($_GET["btn_qty"]) {
                case 1:
                    $_SESSION['cart'][$id]['qty_value']=$_SESSION['cart'][$id]['qty_value']+1;
                    break;
                case 1:
                    if ( $_SESSION['cart'][$id]['qty_value']<=0) {
                        $_SESSION['cart'][$id]['qty_value']=0;
                    }
                    else {
                        $_SESSION['cart'][$id]['qty_value']=$_SESSION['cart'][$id]['qty_value']-1;
                    }
                    break;
                default:
                    foreach ($arr_img as $key => $value) {
                        $id=$key;
                        $_SESSION['cart'][$id]['avtar']=$arr_img[$id];
                        $_SESSION['cart'][$id]['product_name'] = $arr_name[$id];
                        $_SESSION['cart'][$id]['price']=$arr_price[$id];
                        $_SESSION['cart'][$id]['qty_value']=1;
                    }
                    break;
            }
            $_SESSION['cart'][$id]['avtar']=$arr_img[$id];
            $_SESSION['cart'][$id]['product_name'] = $arr_name[$id];
            $_SESSION['cart'][$id]['price']=$arr_price[$id];
        }
        header("Location:../cart.php");exit();
    }
    else
    {
        foreach ($arr_img as $key => $value) {
            $id=$key;
            $_SESSION['cart'][$id]['avtar']=$arr_img[$id];
            $_SESSION['cart'][$id]['product_name'] = $arr_name[$id];
            $_SESSION['cart'][$id]['price']=$arr_price[$id];
            $_SESSION['cart'][$id]['qty_value']=1;
        }
        header("Location:../cart.php");exit();
    }
?>