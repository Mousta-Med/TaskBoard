<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="/taskboard/public/css/style.css" />
    <title>Taskboard</title>
</head>

<body>
    <!-- navbar -->
    <nav>
        <a href="" class="navbar-brand a"><i class="fa-sharp fa-solid fa-list-check iconscolor"></i>board</a>
        <form class="d-flex search">
            <input class="form-control me-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="button">Search</button>
        </form>
        <a class="navbar-brand a" href=""><i class="fa fa-sign-out"></i>Log-Out</a>
    </nav>
    <!-- container -->
    <div class="homecontainer">
        <div class="d-flex justify-content-between p-5">
            <button class="btn btn-primary">Add Task</button>
            <button class="btn btn-primary">Add Multiple</button>
        </div>
        <div class="d-flex justify-content-center taskboard-form">
            <div class="taskboard d-flex flex-row flex-wrap justify-content-around ">
                <div class="todo">
                    <div class="status">
                        <h3 class="display-6">To Do | 3</h3>
                        <div class="linetodo mb-4"></div>
                        <div class="task">
                            <h5>task name</h5>
                            <p>task subject</p>
                            <div>
                                <button class="btn btn-primary">delet</button>
                                <button class="btn btn-primary">edite</button>
                                <button class="btn btn-primary">move right</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="doing">
                    <div class="status">
                        <h3 class="display-6">Doing | 3</h3>
                        <div class="linedoing mb-4"></div>
                        <div class="task">
                            <h5>task name</h5>
                            <p>task subject</p>
                            <div>
                                <button class="btn btn-primary">move left</button>
                                <button class="btn btn-primary">delet</button>
                                <button class="btn btn-primary">edite</button>
                                <button class="btn btn-primary">move right</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="done">
                    <div class="status">
                        <h3 class="display-6">Done | 3</h3>
                        <div class="linedone mb-4 "></div>
                        <div class="task">
                            <h5>task name</h5>
                            <p>task subject</p>
                            <div>
                                <button class="btn btn-primary">move left</button>
                                <button class="btn btn-primary">delet</button>
                                <button class="btn btn-primary">edite</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>