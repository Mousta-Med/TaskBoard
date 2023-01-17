<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="/taskboard/public/css/style.css" />
    <title>Home</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" href=""><i class="fa-sharp fa-solid fa-list-check iconscolor"></i>board</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/taskboard/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/taskboard/taskboard">Taskboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/taskboard/login"><i class="fa-solid fa-right-to-bracket"></i>&nbspLog-in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/taskboard/signup"><i class="fa-solid fa-user-plus"></i>&nbspsign-up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/taskboard/logout"><i class="fa-solid fa-right-from-bracket"></i>Log-out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: black;">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: CTA -->
            <section class="">
                <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3">Register for free</span>
                    <button type="button" class="btn btn-outline-light btn-rounded">
                        Sign up!
                    </button>
                </p>
            </section>
        </div>
        <!-- Copyright -->
        <div class="text-center p-3">
            <p>© 2020 Copyright Taskboard.com</p>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>