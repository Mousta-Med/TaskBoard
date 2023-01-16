
<?php

require_once "app/models/.class.php";


class homecontroller
{
    private $app;

    
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
