<?php

require_once "app/controllers/Home.controller.php";
$homecontroller = new homecontroller;
// hide errors
// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(-1);

if (empty($_GET['page'])) {
    $homecontroller->showtasks();
} else {
    $page = rtrim($_GET['page'], '/');
    $URL = explode('/', filter_var($page), FILTER_SANITIZE_URL);

    switch ($URL[0]) {
        case "signup":
            require "app/views/signup.view.php";
            break;
        case "login":
            require "app/views/login.view.php";
            break;
        case "taskboard":
            $homecontroller->showtasks();
            break;
        case "addtask":
            $homecontroller->addtask();
            break;
        case "addmultitask":
            $homecontroller->addmultitask();
            break;
        case "update":
            $id = $URL[1];
            if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                require "app/views/404.view.php";
            } else {
                $homecontroller->showtaskid($id);
            }
            break;
        case "updatetask":
            $id = $URL[1];
            if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                require "app/views/404.view.php";
            } else {
                $homecontroller->updatetask($id);
            }
            break;
        case "delete":
            $id = $URL[1];
            if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                require "app/views/404.view.php";
            } else {
                $homecontroller->delete($id);
            }
            break;
        default:
            require "app/views/404.view.php";
            break;
    }
}
