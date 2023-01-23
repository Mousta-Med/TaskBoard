<?php

require_once "Db.class.php";

class User extends Db
{
    public function signup($a, $b, $c)
    {
        $connect = new Db;
        $conn = $connect->connection();
        $stmt = $conn->prepare("INSERT INTO user (user_name, user_email, user_password) VALUE(?,?,?)");
        $stmt->bind_param("sss", $a, $b, $c);
        $result = $stmt->execute();
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }
    public function login($email)
    {
        $connect = new Db;
        $conn = $connect->connection();
        $stmt = $conn->prepare("SELECT * FROM user WHERE user_email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}
