<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet"type="text/css" href="style.css">
</head>
<body>
    <center>
        <div>
            <form action="login_check.php" method="POST" class="login_form">
                <center class="title_deg">
                    Admin Login Form
                    <h4>
                        <?php
                        error_reporting(0);

                        session_start();
                        session_destroy();
                        echo $_SESSION['loginMessage'];
                        ?>
                    </h4>
                </center>
                <div class="form_deg">
                    <label for="username" class="lable_deg"> Username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label for="password" class="lable_deg" >Password</label>
                    <input type="password" name="password">
                </div>

                <div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </center>
    
</body>
</html>