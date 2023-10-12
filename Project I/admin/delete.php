<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Admin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM users WHERE id='$_POST[uid]'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    echo "<script>window.open('index.php','_self') </script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
