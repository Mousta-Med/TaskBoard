
<?php

require_once "app/models/Db.class.php";
require_once "app/models/Task.class.php";
require_once "app/models/User.class.php";


class homecontroller
{
    private $user;

    public function addtask()
    {
        $userid = 1;
        $title = $_POST['task-title'];
        $subject = $_POST['task-subject'];
        $status = $_POST['task-status'];
        $deadline = $_POST['deadline'];

        $this->user = new task;
        $query = $this->user->addtask($userid, $status, $title, $subject, $deadline);

        if ($query == true) {
            header('Location: ../taskboard');
        } else {
            echo "error";
        }
    }
    public function updatetask($id)
    {
        $title = $_POST['task-title'];
        $subject = $_POST['task-subject'];
        $deadline = $_POST['deadline'];

        $this->user = new task;
        $query = $this->user->updatetask($title, $subject, $deadline, $id);

        if ($query == true) {
            header('Location: ../taskboard');
        } else {
            echo "error";
        }
    }
    public function showtasks()
    {
        $this->user = new task;
        $sql1 = $this->user->showtasktodo();
        $sql2 = $this->user->showtaskdoing();
        $sql3 = $this->user->showtaskdone();
        $sql4 = $this->user->showarchive();
        $statistique1 = $this->user->statistique("todo");
        $statistique2 = $this->user->statistique("doing");
        $statistique3 = $this->user->statistique("done");

        require "app/views/taskboard.view.php";
    }
    public function showtaskid($id)
    {
        $this->user = new task;
        $sql = $this->user->showtaskid($id);

        require "app/views/update.view.php";
    }

    public function delete($id)
    {
        $this->user = new task;
        $query = $this->user->delete($id);
        if ($query == true) {
            header('Location: ../taskboard');
        } else {
            echo "error";
        }
    }

    public function addmultitask()
    {
        $userid = 1;
        $nptask = $_POST['numoftask'];
        $status = $_POST['task-status'];
        for ($i = 1; $i - 1 < $nptask; $i++) {
            ${'title' . $i} = $_POST['task-title' . $i];
            ${'subject' . $i} = $_POST['task-subject' . $i];
            ${'deadline' . $i} = $_POST['deadline' . $i];
        }
        $this->user = new task;
        for ($i = 1; $i - 1 < $nptask; $i++) {
            $query = $this->user->addtask($userid, $status, ${'title' . $i}, ${'subject' . $i}, ${'deadline' . $i});
        }
        if ($query == true) {
            header('Location: ../taskboard');
        } else {
            echo "error";
        }
    }
    public function moveright($status, $id)
    {
        $this->user = new task;
        if ($status == "doing") {
            $move = "done";
            $query =  $this->user->move($move, $id);
        } elseif ($status == "todo") {
            $move = "doing";
            $query =  $this->user->move($move, $id);
        }

        if ($query == true) {
            header('Location: ../../taskboard');
        } else {
            echo "error";
        }
    }
    public function moveleft($status, $id)
    {
        $this->user = new task;
        if ($status == "doing") {
            $move = "todo";
            $query =  $this->user->move($move, $id);
        } elseif ($status == "done") {
            $move = "doing";
            $query =  $this->user->move($move, $id);
        }

        if ($query == true) {
            header('Location: ../../taskboard');
        } else {
            echo "error";
        }
    }
    public function archive($status, $id)
    {
        $this->user = new task;
        $query =  $this->user->archive($status, $id);


        if ($query == true) {
            header('Location: ../../taskboard');
        } else {
            echo "error";
        }
    }
    public function unarchive($status, $id)
    {
        $this->user = new task;
        $query =  $this->user->unarchive($status, $id);


        if ($query == true) {
            header('Location: ../../taskboard');
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
