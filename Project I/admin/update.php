<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (count($_POST) > 0) {
    mysqli_query($conn, "UPDATE users set Id='" . $_POST['Id'] . "', Username='" . $_POST['Username'] . "', User_Password='" . $_POST['User_Password'] . "' WHERE Id='" . $_POST['Id'] . "'");
    $message = "Record Modified Successfully";
    echo "<script>window.open('index.php','_self') </script>";
}
$result = mysqli_query($conn, "SELECT * FROM users WHERE Id='" . $_GET['Id'] . "'");
$row = mysqli_fetch_array($result);
?>
<html>

<head>
    <title>PHP CRUD</title>
</head>

<body>
    <form name="frmUser" method="post" action="">
        <div>
            <?php if (isset($message)) {
                echo $message;
            } ?>
        </div>
        <div style="padding-bottom:5px;"> </div>
        Id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="hidden" name="Id" class="txtField" value="<?php echo $row['Id']; ?>">
        <input type="text" name="Id" value="<?php echo $row['Id']; ?>">
        <br> <br>
        Username:
        <input type="text" name="Username" class="txtField" value="<?php echo $row['Username']; ?>">
        <br><br>
        Password :
        <input type="text" name="User_Password" class="txtField" value="<?php echo $row['User_Password']; ?>">
        <br><br>
        <input type="submit" name="submit" value="Submit" style="color: #0e0d0d; background-color: #938d8d;border: 0px;width: 30%;height: 8%;font-weight: bolder;">
    </form>
</body>

</html>