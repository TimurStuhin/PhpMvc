<?php
include 'components/Db.php';
include 'Controllers/Home.php';
include 'Controllers/Rent.php';
include 'Controllers/Manage.php';
include 'Controllers/Register.php';
include 'Controllers/Cart.php';
include 'Controllers/Profile.php';
include 'Helpers/Validation.php';
include 'Helpers/Autorization.php';
include 'DAO/CategoryDAO.php';
include 'DAO/OrderDAO.php';
include 'DAO/ProductDAO.php';
include 'DAO/UserDAO.php';
checklog();
function checklog() {
    //header('Location: /index.php');
    $validation = new Validation();
    $access = array();
//    if(isset($_POST['login'])){
//        
//        $result = $validation->ValidLogin($_POST['login']);
//        $access['login'] = $result;
//    }
//     if(isset($_POST['email'])){
//        
//        $result = $validation->ValidEmail($_POST['email']);
//        $access['email'] = $result;
//    }
//     if (isset($_POST['password'])) {
//
//        $result = $validation->ValidPassword($_POST['password']);
//        $access['password'] = $result;
//    }
        $access = $validation->CheckAll($_POST['login'], $_POST['email'], $_POST['password']);
        $access['access'] = $validation->GetAccess();

    $error = json_encode($access);
    echo $error;
}
