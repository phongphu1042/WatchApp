<?php
session_start();
include '../dao/UserDao.php';
include_once './BaseController.php';

function alertM($smg, $link)
{
    echo '<script language="javascript">';
    echo 'alert("' . $smg . '")';
    echo '</script>';
    echo '<script type="text/javascript">
            window.location = "' . $link . '" </script>';
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    UserDao::deleteUser($id);
    alertM("Delete user Thành Công", "../view/UserList.php");
} else if (isset($_GET['update'])) {
    $id = $_GET['update'];

    UserDao::updateUser($id, $user_id, $user_name, $user_email, $user_pass, $user_phone, $user_address);
    alertM("Update user Thành Công", "../view/UserList.php");
}
$user_group_action = $_POST["user_group_action"];
switch ($user_group_action) {
    case 'user_login':

        $login_email = isset($_POST['login_email']) ? $_POST['login_email'] : '';
        $login_password = isset($_POST['login_password']) ? $_POST['login_password'] : '';
        $login_password = md5($login_password);
        $data = UserDao::getUser($login_email);

        if ($login_email == $data["user_email"] && $login_password == $data["user_pass"]) {
            $_SESSION["user_email"] = $login_email;
            $_SESSION["isLogin"] = true;
            alertM("Đăng Nhập Thành Công", "../view/UserList.php");
            die();
        } else {
            header("Location: ../view/login.php");
        }
        break;
    case 'user_create':
        $txt_id = $_POST["txt_id"];
        $txt_name = $_POST["txt_name"];
        $txt_email = $_POST["txt_email"];
        $txt_pass = md5($_POST["txt_pass"]);
        $txt_phone = $_POST["txt_phone"];
        $txt_address = $_POST["txt_adress"];
        UserDao::insertUser($txt_id, $txt_name, $txt_email, $txt_pass, $txt_phone, $txt_address);
        alertM("Thêm user Thành Công", "../view/UserList.php");
}
