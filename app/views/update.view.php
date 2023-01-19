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
    <!-- container -->
    <div class="updatecontainer">
        <h2 class="pb-5">Update Task</h2>
        <div class="updatetask">
            <?php
            $task = mysqli_fetch_assoc($sql);
            ?>
            <form action="../updatetask/<?= $task['task_id'] ?>" method="post">
                <input class="input form-control mt-3 mb-3" type="text" name="task-title" value="<?= $task['task_title'] ?>" required>
                <input class="input form-control mb-3" type="text" name="task-subject" value="<?= $task['task_subject'] ?>" required>
                <label for="">Deadline :</label>
                <div class="mb-3 mt-2">
                    <input type="datetime-local" class="deadline" name="deadline" value="<?= $task['task_deadline'] ?>" min="<?php echo date('Y-m-d\TH:i'); ?>" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                </div>
            </form>
            <a href="/taskboard/taskboard"><button class="btn btn-danger back">Back</button></a>
        </div>
    </div>
    <script src="/taskboard/public/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>