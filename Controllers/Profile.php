<?php

class Profile {

    public function Info($id) {
        $userDAO = new UserDAO();
        $user = $userDAO->GetUserById($id);

        require_once('Views/Profile/Info.php');
    }

    public function Edit($id) {
        $userDAO = new UserDAO();
        $user = $userDAO->GetUserById($id);
        if (isset($_POST['submit'])) {
            $errors = array();
            $validation = new Validation();
            $errors[] = $validation->ValidLogin($_POST['login']);
            $errors[] = $validation->ValidEmail($_POST['email']);
            if ($_POST['password']) {
                $errors[] = $validation->ValidPassword($_POST['password']);
            } else {
                
            }
            if (!$errors[0] & !$errors[1]) {
                $user['login'] = $_POST['login'];
                $user['password_hash'] = $_POST['password'];
                $user['email'] = $_POST['email'];
                $userDAO->UpdateUser($user);
            } else {
                print_r($errors);
            }
        }
        require_once('Views/Profile/Edit.php');
    }

}
