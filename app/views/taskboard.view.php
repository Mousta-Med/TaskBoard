<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/taskboard/public/css/style.css" />
    <script src="https://kit.fontawesome.com/65cfe681d2.js" crossorigin="anonymous"></script>
    <title>Taskboard</title>
</head>

<body>
    <!-- navbar -->
    <nav>
        <a href="" class="navbar-brand a"><i class="fa-sharp fa-solid fa-list-check iconscolor i"></i>board</a>
        <form class="d-flex search">
            <input class="form-control me-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="button">Search</button>
        </form>
        <a class="navbar-brand a" href=""><i class="fa fa-sign-out"></i>Log-Out</a>
    </nav>
    <!-- container -->
    <div class="homecontainer">
        <div class="d-flex justify-content-between p-5">
            <button class="btn btn-primary add-open">Add Task</button>
            <button class="btn btn-primary add-multi-open">Add Multiple</button>
        </div>
        <div class="d-flex justify-content-center taskboard-form">
            <div class="taskboard d-flex flex-row flex-wrap justify-content-around ">
                <div class="todo">
                    <div class="status">
                        <h3 class="display-6">To Do <span style="color: red;">|</span> 3</h3>
                        <div class="linetodo mb-4"></div>
                        <div class="task">
                            <h5>task name</h5>
                            <p>task subjectpppppppppppppppppppppppppppppppppppppppppppppppp</p>
                            <div>
                                <i class="fa-solid fa-trash-can i"></i>
                                <i class="fa-regular fa-pen-to-square i"></i>
                                <i class="fa-solid fa-right-long i"></i>
                            </div>
                        </div>
                        <div class="task">
                            <h5>task name</h5>
                            <p>task subjectpppppppppppppppppppppppppppppppppppppppppppppppp</p>
                            <div>
                                <i class="fa-solid fa-trash-can i"></i>
                                <i class="fa-regular fa-pen-to-square i"></i>
                                <i class="fa-solid fa-right-long i"></i>
                            </div>
                        </div>
                        <div class="task">
                            <h5>task name</h5>
                            <p>task subjectpppppppppppppppppppppppppppppppppppppppppppppppp</p>
                            <div>
                                <i class="fa-solid fa-trash-can i"></i>
                                <i class="fa-regular fa-pen-to-square i"></i>
                                <i class="fa-solid fa-right-long i"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="doing">
                    <div class="status">
                        <h3 class="display-6">Doing <span style="color: orange;">|</span> 3</h3>
                        <div class="linedoing mb-4"></div>
                        <div class="task">
                            <h5>task name</h5>
                            <p>task subject</p>
                            <div>
                                <i class="fa-solid fa-left-long i"></i>
                                <i class="fa-solid fa-trash-can i"></i>
                                <i class="fa-regular fa-pen-to-square i"></i>
                                <i class="fa-solid fa-right-long i"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="done">
                    <div class="status">
                        <h3 class="display-6">Done <span style="color: rgb(16, 180, 16);">|</span> 3</h3>
                        <div class="linedone mb-4 "></div>
                        <div class="task">
                            <h5>task name</h5>
                            <p>task subject</p>
                            <div>
                                <i class="fa-solid fa-left-long i"></i>
                                <i class="fa-solid fa-trash-can i"></i>
                                <i class="fa-regular fa-pen-to-square i"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="addtask">
            <i class="fa-solid fa-xmark add-close mt-3"></i>
            <form>
                <input class="input form-control mt-3 mb-3" type="text" placeholder="Enter your name" required>
                <input class="input form-control mb-3" type="email" placeholder="Enter your email" required>
                <input class="input form-control mb-3" type="email" placeholder="Enter your email" required>
                <button class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
        <div class="addtask-multi">
            <i class="fa-solid fa-xmark add-multi-close mt-3"></i>
            <form>
                <div class="num-of-task">
                    <label for="numoftask">Number Of Task :</label>
                    <input type="number" class="numoftask" name="numoftask" min="1" max="10" style="color: black;">
                </div>
                <div class="task-form d-flex flex-row justify-content-around flex-wrap">
                </div>
            </form>
        </div>

    </div>
    <script src="/taskboard/public/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>