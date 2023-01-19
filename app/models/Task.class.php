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
    public function updatetask($a, $b, $c, $d)
    {
        $connect = new Db;
        $conn = $connect->connection();
        $stmt = $conn->prepare("UPDATE task SET task_title = ?, task_subject = ?, task_deadline = ? WHERE task_id = ?");
        $stmt->bind_param("sssi", $a, $b, $c, $d);
        $result = $stmt->execute();
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }
    public function showtasktodo()
    {
        $connect = new Db;
        $conn = $connect->connection();
        $sql1 = $conn->prepare("SELECT * FROM task WHERE task_status = 'todo' AND user_id = 1 ORDER BY task_deadline");
        // $sql3->bind_param("i", $id);
        $sql1->execute();
        $result = $sql1->get_result();
        return $result;
    }
    public function showtaskdoing()
    {
        $connect = new Db;
        $conn = $connect->connection();
        $sql2 = $conn->prepare("SELECT * FROM task WHERE task_status = 'doing' AND user_id = 1 ORDER BY task_deadline");
        // $sql3->bind_param("i", $id);
        $sql2->execute();
        $result = $sql2->get_result();
        return $result;
    }
    public function showtaskdone()
    {
        $connect = new Db;
        $conn = $connect->connection();
        $sql3 = $conn->prepare("SELECT * FROM task WHERE task_status = 'done' AND user_id = 1 ORDER BY task_deadline");
        // $sql3->bind_param("i", $id);
        $sql3->execute();
        $result = $sql3->get_result();
        return $result;
    }
    public function delete($id)
    {
        $connect = new Db;
        $conn = $connect->connection();
        $query = $conn->prepare("DELETE FROM task WHERE task_id = ?");
        $query->bind_param("i", $id);
        $result = $query->execute();
        return $result;
    }
    public function showtaskid($id)
    {
        $connect = new Db;
        $conn = $connect->connection();
        $query = $conn->prepare("SELECT * FROM task WHERE task_id = ?");
        $query->bind_param("i", $id);
        $query->execute();
        $result = $query->get_result();
        return $result;
    }
}
