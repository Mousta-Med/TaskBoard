<?php

require_once "app/models/Db.class.php";
require_once "app/models/Task.class.php";
require_once "app/models/User.class.php";


class Usercontroller
{
    private $user;

    public function loginform()
    {
        if (isset($_SESSION['email'])) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'You Must Logout First'
            ];
            header("location: /taskboard/");
        } else {
            require "app/views/login.view.php";
        }
    }
    public function signupform()
    {
        if (isset($_SESSION['email'])) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'You Must Logout First'
            ];
            header("location: /taskboard/");
        } else {
            require "app/views/signup.view.php";
        }
    }
    public function login()
    {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->user = new user;
        $result = $this->user->login($email);
        $row = $result->fetch_assoc();
        $storedHash = $row['user_password'];
        $id = $row['user_id'];
        if (password_verify($password, $storedHash)) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $id;
            $_SESSION['alert'] = [
                'type' => 'success',
                'msg' => 'Login Successful.'
            ];
            header('Location: /taskboard/taskboard');
        } else {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'Invalid Email Or Password.'
            ];
            header('Location: /taskboard/login');
        }
    }
    public function logout()
    {
        session_unset();
        session_destroy();
        session_start();
        $_SESSION['alert'] = [
            'type' => 'success',
            'msg' => 'Logout Successful.'
        ];
        header('Location: /taskboard/login');
    }
    public function signup()
    {

        $this->user = new user;

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $result = $this->user->login($email);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'This Email Already Used.'
            ];
            header('Location: /taskboard/signup');
        } else {
            $this->user->signup($name, $email, $password);
            $_SESSION['alert'] = [
                'type' => 'success',
                'msg' => 'Compte Created Successfuly.'
            ];
            header('Location: /taskboard/login');
        }
    }
}
