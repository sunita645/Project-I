<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">

    <style>
        h2 {
            font-family: 'Overpass', sans-serif;
            font-weight: bold;
            color: #000;
        }

        .form-control,
        .btn {
            height: 40px;
            border-radius: 0px;
            margin-top: 10px;
            
            
        }
        
        .container{
            margin: auto;
        }

       
    </style>

</head>

<body>

    <div class="container mt-5 " >
        <div class="row">
            <div class="col-md-6 shadow p-3">
                <form action="registration.php" method="post" class="form_deg">
                    <h2 align=" center"> REGISTER</h2>

                    <div class="mb-2">
                        <label for="name"> Full Name</label>
                        <input type="text" name="name" class="form-control" require placeholder="Full Name">
                    </div>

                    <div class="mb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" require placeholder="Password">
                    </div>
                    <button type="submit" name="register" class="btn btn-primary btn-block"> REGISTER</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5 d-">
        <div class="row">
            <div class="col-sm-6 shadow p-3">
                <form action="validation.php" method="POST" class="form_deg">
                    <h2 align=" center"> Login</h2>

                    <div class="mb-2">
                        <label for="name">Full Name</label>
                        <input type="tex" name="name" class="form-control" require placeholder="Full-Name">
                    </div>
                    <div class="mb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" require placeholder="Password">
                    </div>
                    <button type="submit" name="login" class="btn btn-info btn-block "> LOGIN</button>
                </form>
            </div>
        </div>
    </div>




</body>

</html>