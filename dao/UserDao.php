<?php
include '../utils/MySQLUtil.php';
class UserDao
{
    public function getAllUser()
    {

        $myDB = new MySQLUtil();
        $query = "SELECT user_name,user_email,user_pass,user_phone,user_address FROM user";
        $data = $myDB->getAllData($query);
        $myDB->disconnectDB();
        return $data;
    }

    public static function insertUser($username,$useremail,$userpass,$userphone,$useraddress)
    {
        $myDB = new MySQLUtil();
        $query = "INSERT INTO user (user_name,user_email,user_pass,user_phone,user_address) VALUES (:username,:useremail,:userpass,:userphone,:useraddress)";
        $param = array(":username" => $username, ":useremail" => $useremail, ":userpass" => $userpass, ":userphone" => $userphone, ":useraddress" => $useraddress);
        $myDB->insertData($query, $param);
        $myDB->disconnectDB();
    }

    public static function getUser($user_email)
    {
        $myDB = new MySQLUtil();
        $query = "SELECT user_name,user_email,user_pass FROM user where user_email=:user_email";
        $param = array(":user_email" => $user_email);
        $data = $myDB->getData($query, $param);
        $myDB->disconnectDB();
        return $data[0];
    }
    public function deleteUser($user_email)
    {
        $myDB = new MySQLUtil();
        $query = "DELETE FROM user where user_email=:user_email";
        $param = array(":user_email" => $user_email);
        $myDB->updateData($query, $param);
        $myDB->disconnectDB();
    }
    public static function updateUser($user_email,$userpass)
    {
        $myDB = new MySQLUtil();
        $query = "update user set user_pass=:pass where user_email=:email";
        $param = array(":email" => $user_email, ":pass"=>$userpass);
        $myDB->updateData($query, $param);
        $myDB->disconnectDB();
    }
}
?>