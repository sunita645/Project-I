<?php
session_start();
if(!isset($_SESSION['name'])){
header('location:login.php');
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h2 class="text-center text-success">Hello <?php echo $_SESSION['name']; ?> Welcome to Fully Quiz Section</h2>
        <button class="btn btn-outline-dark me-2 mb-3 btn-dark text-decoration-none"><a href="logout.php">LOGOUT</a></button>
        <div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">B C A Q U I Z</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true" href="#">BCA

                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item" href="#">1st Semester</li>
                                        <li class="dropdown-item" href="#">2nd Semester</li>
                                        <li class="dropdown-item" href="#">3rd Semester </li>
                                        <li class="dropdown-item" href="#">4th Semester </li>
                                        <li class="dropdown-item" href="#">5th Semester</li>
                                        <li class="dropdown-item" href="#">6th Semester</li>
                                        <li class="dropdown-item" href="#">7th Semester</li>
                                        <li class="dropdown-item" href="#">8th Semester</li>


                                    </ul>
                                </a>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit" >Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container d-flex mt-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">First Semester</h5>
                    <p class="card-text">To play more about this semester click on the this button.</p>
                    <a href="#" class="btn btn-primary " onclick="window.location.assign('bcaQues.html')">PLAY QUIZ</a>
                </div>
            </div>
        </div>
</body>

</html>