<?php

require_once "app/models/Db.class.php";
require_once "app/models/Task.class.php";
require_once "app/models/User.class.php";


class Usercontroller
{
    private $user;

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
            header('Location: /taskboard/taskboard');
        } else {
            $msg = "Invalid username or password.";
            header('Location: /taskboard/login');
        }
    }
    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: /taskboard/login');
    }
    public function signup()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $this->user = new user;
        $query = $this->user->signup($name, $email, $password);

        if ($query == true) {
            header('Location: /taskboard/login');
        } else {
            echo "error";
        }
    }

    // public function checklogin()
    // {
    //     $connect = new Db;
    //     $conn = $connect->connection();
    //     session_start();
    //     if (isset($_POST['username']) && isset($_POST['password'])) {
    //         $username = htmlspecialchars(trim(strtolower($_POST['username'])));
    //         $password = sha1($_POST['password']);
    //         $sql = "SELECT * FROM admin WHERE admin_username = '$username' AND admin_password = '$password'";
    //         $result = mysqli_query($conn, $sql);
    //         if (mysqli_num_rows($result) > 0) {
    //             $_SESSION['name'] = $username;
    //             $_SESSION['password'] = $password;
    //             header("Location: dashboard");
    //         } else {
    //             header("location: views/login.view.php?error=username or password incorrect");
    //         }
    //     }
    // }
}
