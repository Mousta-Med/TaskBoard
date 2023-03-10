
<?php
session_start();
require_once "app/models/Db.class.php";
require_once "app/models/Task.class.php";
require_once "app/models/User.class.php";


class Homecontroller
{
    private $app;

    public function addtask()
    {
        if (!isset($_SESSION['email'])) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'You Must Login First'
            ];
            header("location: /taskboard/login");
        } else {
            $userid = $_SESSION['id'];
            $title = $_POST['task-title'];
            $subject = $_POST['task-subject'];
            $status = $_POST['task-status'];
            $deadline = $_POST['deadline'];

            $this->app = new Task;
            $query = $this->app->addtask($userid, $status, $title, $subject, $deadline);

            if ($query == true) {
                $_SESSION['alert'] = [
                    'type' => 'success',
                    'msg' => 'Task Added Successfuly'
                ];
                header('Location: ../taskboard');
            } else {
                echo "error";
            }
        }
    }
    public function updatetask($id)
    {
        if (!isset($_SESSION['email'])) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'You Must Login First'
            ];
            header("location: /taskboard/login");
        } else {
            $title = $_POST['task-title'];
            $subject = $_POST['task-subject'];
            $deadline = $_POST['deadline'];

            $this->app = new Task;
            $query = $this->app->updatetask($title, $subject, $deadline, $id);

            if ($query == true) {
                $_SESSION['alert'] = [
                    'type' => 'success',
                    'msg' => 'Task Updated Successfuly'
                ];
                header('Location: ../taskboard');
            } else {
                echo "error";
            }
        }
    }
    public function showtasks()
    {
        if (!isset($_SESSION['email'])) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'You Must Login First'
            ];
            header("location: /taskboard/login");
        } else {
            $userid = $_SESSION['id'];
            $this->app = new Task;
            $sql1 = $this->app->showtasktodo($userid);
            $sql2 = $this->app->showtaskdoing($userid);
            $sql3 = $this->app->showtaskdone($userid);
            $sql4 = $this->app->showarchive($userid);
            $statistique1 = $this->app->statistique("todo", $userid);
            $statistique2 = $this->app->statistique("doing", $userid);
            $statistique3 = $this->app->statistique("done", $userid);

            require "app/views/taskboard.view.php";
        }
    }
    public function showtaskid($id)
    {
        if (!isset($_SESSION['email'])) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'You Must Login First'
            ];
            header("location: /taskboard/login");
        } else {
            $this->app = new Task;
            $sql = $this->app->showtaskid($id);
            require "app/views/update.view.php";
        }
    }

    public function delete($id)
    {
        if (!isset($_SESSION['email'])) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'You Must Login First'
            ];
            header("location: /taskboard/login");
        } else {
            $this->app = new Task;
            $query = $this->app->delete($id);
            if ($query == true) {
                $_SESSION['alert'] = [
                    'type' => 'success',
                    'msg' => 'Task Deleted Successfuly'
                ];
                header('Location: ../taskboard');
            } else {
                echo "error";
            }
        }
    }

    public function addmultitask()
    {
        if (!isset($_SESSION['email'])) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'You Must Login First'
            ];
            header("location: /taskboard/login");
        } else {
            $userid = $_SESSION['id'];
            $nptask = $_POST['numoftask'];
            $status = $_POST['task-status'];
            for ($i = 1; $i - 1 < $nptask; $i++) {
                ${'title' . $i} = $_POST['task-title' . $i];
                ${'subject' . $i} = $_POST['task-subject' . $i];
                ${'deadline' . $i} = $_POST['deadline' . $i];
            }
            $this->app = new Task;
            for ($i = 1; $i - 1 < $nptask; $i++) {
                $query = $this->app->addtask($userid, $status, ${'title' . $i}, ${'subject' . $i}, ${'deadline' . $i});
            }
            if ($query == true) {
                $_SESSION['alert'] = [
                    'type' => 'success',
                    'msg' => 'Tasks Added Successfuly'
                ];
                header('Location: ../taskboard');
            } else {
                echo "error";
            }
        }
    }
    public function moveright($status, $id)
    {
        if (!isset($_SESSION['email'])) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'You Must Login First'
            ];
            header("location: /taskboard/login");
        } else {
            $this->app = new Task;
            if ($status == "doing") {
                $move = "done";
                $query =  $this->app->move($move, $id);
            } elseif ($status == "todo") {
                $move = "doing";
                $query =  $this->app->move($move, $id);
            }

            if ($query == true) {
                header('Location: ../../taskboard');
            } else {
                echo "error";
            }
        }
    }
    public function moveleft($status, $id)
    {
        if (!isset($_SESSION['email'])) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'You Must Login First'
            ];
            header("location: /taskboard/login");
        } else {
            $this->app = new Task;
            if ($status == "doing") {
                $move = "todo";
                $query =  $this->app->move($move, $id);
            } elseif ($status == "done") {
                $move = "doing";
                $query =  $this->app->move($move, $id);
            }

            if ($query == true) {
                header('Location: ../../taskboard');
            } else {
                echo "error";
            }
        }
    }
    public function archive($status, $id)
    {
        $this->app = new Task;
        $query =  $this->app->archive($status, $id);

        if (!isset($_SESSION['email'])) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'You Must Login First'
            ];
            header("location: /taskboard/login");
        } else {

            if ($query == true) {
                $_SESSION['alert'] = [
                    'type' => 'success',
                    'msg' => 'Task Archived Successfuly'
                ];
                header('Location: ../../taskboard');
            } else {
                echo "error";
            }
        }
    }
    public function unarchive($status, $id)
    {
        $this->app = new Task;
        $query =  $this->app->unarchive($status, $id);

        if (!isset($_SESSION['email'])) {
            $_SESSION['alert'] = [
                'type' => 'danger',
                'msg' => 'You Must Login First'
            ];
            header("location: /taskboard/login");
        } else {
            if ($query == true) {
                $_SESSION['alert'] = [
                    'type' => 'success',
                    'msg' => 'Task Unarchived Successfuly'
                ];
                header('Location: ../../taskboard');
            } else {
                echo "error";
            }
        }
    }
}
