<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='admin'){
    header("location:login.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin home</title>
    <link rel="stylesheet" type="text/css" href="adminhome.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <div class="logout">
        <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>

</head>
<body>
   <header class="header">
    <a href="">User Dashboard</a>
   </header>

   <aside>
    <ul>
        <li>
            <a href="">My Courses</a>
        </li>

        <li>
            <a href=""> My Notes</a>
        </li>

        <li>
            <a href="">My Quizes</a>
        </li>

       
    </ul>
   </aside>

   <div class="content">
    <h2>Sidebar Accordition</h2>
    <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a exercitationem repellat corporis unde officiis modi nemo blanditiis voluptas nihil.

    </p>
    <input type="text" name="" id="">
    
   </div>
</body>
</html>