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
        <a class="navbar-brand a" href="/taskboard/logout"><i class="fa fa-sign-out"></i>Log-Out</a>
    </nav>
    <!-- container -->
    <div class="homecontainer">
        <?php
        if (!empty($_SESSION['alert'])) {
        ?>
            <div class="msg">
                <div class="alert mt-2 alert-<?= $_SESSION['alert']['type'] ?>" role="alert">
                    <?= $_SESSION['alert']['msg'] ?>
                </div>
            </div>
        <?php
        }
        unset($_SESSION['alert']);
        ?>
        <div class="d-flex justify-content-between p-5">
            <button class="btn btn-primary add-open">Add Task</button>
            <button class="btn btn-primary archive-open">Archive</button>
            <button class="btn btn-primary add-multi-open">Add Multiple</button>
        </div>
        <div class="d-flex justify-content-center taskboard-form">
            <div class="taskboard d-flex flex-row flex-wrap justify-content-around ">
                <div class="todo">
                    <div class="status">
                        <?php
                        $stat1 = mysqli_fetch_array($statistique1);
                        ?>
                        <h3 class="display-6">To Do <span style="color: red;">|</span> <?= $stat1[0] ?></h3>
                        <div class="linetodo mb-4"></div>
                        <?php
                        while ($task = mysqli_fetch_assoc($sql1)) {
                            if ($task['task_deadline'] <= date('Y-m-d H:i:s')) {
                                $task['task_deadline'] = "expired";
                            }
                        ?>
                            <div class="task">
                                <h5><?= $task['task_title'] ?> : </h5>
                                <p><?= $task['task_subject'] ?></p>
                                <p class="deadtext">Deadline : <?= $task['task_deadline'] ?></p>
                                <div class="d-flex justify-content-around">
                                    <a href="delete/<?= $task['task_id'] ?>"><i class="fa-solid fa-trash-can i"></i></a>
                                    <a href="archive/<?= $task['task_status'] ?>/<?= $task['task_id'] ?>"><i class="fa-solid fa-box-archive i"></i></a>
                                    <a href="update/<?= $task['task_id'] ?>"><i class="fa-regular fa-pen-to-square i"></i></a>
                                    <a href="moveright/<?= $task['task_status'] ?>/<?= $task['task_id'] ?>"><i class="fa-solid fa-right-long i"></i></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="doing">
                    <div class="status">
                        <?php
                        $stat2 = mysqli_fetch_array($statistique2);
                        ?>
                        <h3 class="display-6">Doing <span style="color: orange;">|</span> <?= $stat2[0] ?></h3>
                        <div class="linedoing mb-4"></div>
                        <?php
                        while ($task = mysqli_fetch_assoc($sql2)) {
                            if ($task['task_deadline'] <= date('Y-m-d H:i:s')) {
                                $task['task_deadline'] = "expired";
                            }
                        ?>
                            <div class="task">
                                <h5><?= $task['task_title'] ?></h5>
                                <p><?= $task['task_subject'] ?></p>
                                <p class="deadtext">Deadline : <?= $task['task_deadline'] ?></p>
                                <div class="d-flex justify-content-around">
                                    <a href="moveleft/<?= $task['task_status'] ?>/<?= $task['task_id'] ?>"><i class="fa-solid fa-left-long i"></i></a>
                                    <a href="delete/<?= $task['task_id'] ?>"><i class="fa-solid fa-trash-can i"></i></a>
                                    <a href="archive/<?= $task['task_status'] ?>/<?= $task['task_id'] ?>"><i class="fa-solid fa-box-archive i"></i></a>
                                    <a href="update/<?= $task['task_id'] ?>"><i class="fa-regular fa-pen-to-square i"></i></a>
                                    <a href="moveright/<?= $task['task_status'] ?>/<?= $task['task_id'] ?>"><i class="fa-solid fa-right-long i"></i></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="done">
                    <div class="status">
                        <?php
                        $stat3 = mysqli_fetch_array($statistique3);
                        ?>
                        <h3 class="display-6">Done <span style="color: rgb(16, 180, 16);">|</span> <?= $stat3[0] ?></h3>
                        <div class="linedone mb-4 "></div>
                        <?php
                        while ($task = mysqli_fetch_assoc($sql3)) {
                            if ($task['task_deadline'] <= date('Y-m-d H:i:s')) {
                                $task['task_deadline'] = "expired";
                            }
                        ?>
                            <div class="task">
                                <h5><?= $task['task_title'] ?></h5>
                                <p><?= $task['task_subject'] ?></p>
                                <p class="deadtext">Deadline : <?= $task['task_deadline'] ?></p>
                                <div class="d-flex justify-content-around">
                                    <a href="moveleft/<?= $task['task_status'] ?>/<?= $task['task_id'] ?>"><i class="fa-solid fa-left-long i"></i></a>
                                    <a href="delete/<?= $task['task_id'] ?>"><i class="fa-solid fa-trash-can i"></i></a>
                                    <a href="archive/<?= $task['task_status'] ?>/<?= $task['task_id'] ?>"><i class="fa-solid fa-box-archive i"></i></a>
                                    <a href="update/<?= $task['task_id'] ?>"><i class="fa-regular fa-pen-to-square i"></i></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="addtask">
            <i class="fa-solid fa-xmark add-close mt-3"></i>
            <form action="addtask" method="post">
                <input class="input form-control mt-3 mb-3" type="text" name="task-title" placeholder="Enter Task Title" required>
                <input class="input form-control mb-3" type="text" name="task-subject" placeholder="Enter Task subject" required>
                <input type="text" value="todo" name="task-status" class="d-none">
                <label for="">Deadline :</label>
                <div class="mb-3 mt-2">
                    <input type="datetime-local" class="deadline" name="deadline" min="<?= date('Y-m-d\TH:i') ?>" required>
                </div>
                <button class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
        <div class="addtask-multi">
            <i class="fa-solid fa-xmark add-multi-close mt-3"></i>
            <form action="addmultitask" method="post">
                <div class="num-of-task mb-3 mt-3">
                    <label for="numoftask">Number Of Task :</label>
                    <input type="number" class="numoftask" name="numoftask" min="2" max="8" style="color: black;">
                </div>
                <div class="task-form d-flex flex-row justify-content-around flex-wrap">

                </div>
                <button class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
        <div class="archive">
            <i class="fa-solid fa-xmark archive-close mt-3 mb-4"></i>
            <div class="d-flex flex-row justify-content-between flex-wrap p-2">
                <?php
                while ($task = mysqli_fetch_assoc($sql4)) {
                ?>
                    <div class="archived-task d-flex align-items-center justify-content-between">
                        <h5><?= $task['task_title'] ?></h5>
                        <a href="unarchive/<?= $task['st_bf_ar'] ?>/<?= $task['task_id'] ?>"><i class="fa-solid fa-box-archive i"></i></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="/taskboard/public/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>