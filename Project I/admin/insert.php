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
$sql = "INSERT INTO users (Id, Username, User_Password)
VALUES ('$_POST[id]','$_POST[name]','$_POST[password]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<script>window.open('index.php','_self') </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
