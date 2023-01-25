<?php

require_once "app/controllers/Home.controller.php";
require_once "app/controllers/User.controller.php";
$Homecontroller = new Homecontroller;
$Usercontroller = new Usercontroller;
// hide errors
// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(-1);

if (empty($_GET['page'])) {
    $Homecontroller->showtasks();
} else {
    $page = rtrim($_GET['page'], '/');
    $URL = explode('/', filter_var($page), FILTER_SANITIZE_URL);

    switch ($URL[0]) {
        case "signup":
            $Usercontroller->signupform();
            break;
        case "user-signup":
            $Usercontroller->signup();
            break;
        case "login":
            $Usercontroller->loginform();
            break;
        case "logout":
            $Usercontroller->logout();
            break;
        case "user-login":
            $Usercontroller->login();
            break;
        case "taskboard":
            $Homecontroller->showtasks();
            break;
        case "addtask":
            $Homecontroller->addtask();
            break;
        case "addmultitask":
            $Homecontroller->addmultitask();
            break;
        case "moveright":
            $status = $URL[1];
            $id = $URL[2];
            $Homecontroller->moveright($status, $id);
            break;
        case "moveleft":
            $status = $URL[1];
            $id = $URL[2];
            $Homecontroller->moveleft($status, $id);
            break;
        case "archive":
            $status = $URL[1];
            $id = $URL[2];
            $Homecontroller->archive($status, $id);
            break;
        case "unarchive":
            $status = $URL[1];
            $id = $URL[2];
            $Homecontroller->unarchive($status, $id);
            break;
        case "update":
            $id = $URL[1];
            if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                require "app/views/404.view.php";
            } else {
                $Homecontroller->showtaskid($id);
            }
            break;
        case "updatetask":
            $id = $URL[1];
            if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                require "app/views/404.view.php";
            } else {
                $Homecontroller->updatetask($id);
            }
            break;
        case "delete":
            $id = $URL[1];
            if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                require "app/views/404.view.php";
            } else {
                $Homecontroller->delete($id);
            }
            break;
        default:
            require "app/views/404.view.php";
            break;
    }
}
