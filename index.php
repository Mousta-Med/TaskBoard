<?php

require_once "app/controllers/Home.controller.php";
$homecontroller = new homecontroller;
// hide errors
// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(-1);

if (empty($_GET['page'])) {
    require "app/views/home.view.php";
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
            require "app/views/taskboard.view.php";
            break;
        case "home":
            require "app/views/home.view.php";
            break;
        default:
            require "app/views/404.view.php";
            break;
    }
}
