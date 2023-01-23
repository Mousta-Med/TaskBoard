<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="/taskboard/public/css/style.css" />
    <title>Login</title>
</head>

<body>
    <div class="login d-flex flex-column flex-wrap">
        <?php
        if (!empty($_SESSION['alert'])) {
        ?>
            <div class="msg">
                <div class="alert alert-<?= $_SESSION['alert']['type'] ?>" role="alert">
                    <?= $_SESSION['alert']['msg'] ?>
                </div>
            </div>
        <?php
        }
        unset($_SESSION['alert']);
        ?>
        <div class="container" style="width: 65%;">
            <h1 class="h1 display-3 mb-5  text-center fw-normal ">Login</h1>
            <div class="col-md-6 offset-md-3">
                <form action="user-login" method="post">
                    <div class="form-group mt-5 mb-3">
                        <label for="email" class="lead">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group ">
                        <label for="password" class="lead">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    <div class="info_div mt-4">
                        <p>You dont have account ?<a href="signup">Register now</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>