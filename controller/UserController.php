<?php
session_start();
include_once '../utils/DataValidactionUtils.php';
include_once './BaseController.php';
include '../dao/UserDao.php';


function alertM($smg, $link)
{
    echo '<script language="javascript">';
    echo 'alert("'.$smg.'")';
    echo '</script>';
    echo '<script type="text/javascript">
            window.location = "'.$link.'" </script>';
}

$user_group_action = $_POST["user_group_action"];
switch ($user_group_action) {
            case 'user_create':

                break;
            case 'user_login':

                $login_email = isset($_POST['login_email']) ? $_POST['login_email'] : '';
                $login_password = isset($_POST['login_password']) ? $_POST['login_password'] : '';

                $login_password = md5($login_password);

                $data = UserDao::getUser($login_email);
             
                if (isset($data["user_email"]) == false) {
                    alertM("Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. !!!", "../view/login.php");
                    exit;
                } elseif (!$login_email || !$login_password) {
                    alertM("Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu !!! ", "../view/login.php");
                    exit;
                } elseif ($login_password != $data["user_pass"]) {
                    alertM("Mật khẩu bạn không chính xác. Vui lòng kiểm tra lại. !!!", "../view/login.php");
                    exit;
                } elseif ($login_email == $data["user_email"] && $login_password == $data["user_pass"]) {
                    $_SESSION["user_email"] = $login_email;
                    $_SESSION["isLogin"] = true;
                    alertM("Đăng Nhập Thành Công", "../view/index.php");
                    die();
                } else {
                    header("Location: ../view/login.php");
                }
                break;
            case 'user_update':

          
                break;
        }
    



?>