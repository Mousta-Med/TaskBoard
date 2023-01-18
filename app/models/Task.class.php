<?php

require_once "Db.class.php";

class task extends Db
{
    public function addtask($a, $b, $c, $d, $e)
    {
        $connect = new Db;
        $conn = $connect->connection();
        $stmt = $conn->prepare("INSERT INTO task (user_id, task_status, task_title, task_subject, task_deadline) VALUE(?,?,?,?,?)");
        $stmt->bind_param("issss", $a, $b, $c, $d, $e);
        $result = $stmt->execute();
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }
}
