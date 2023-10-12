<?php
session_start();
header('location:login.php');


$conn = mysqli_connect('localhost','root');
if($conn)
{
    echo "connection successfully";

    
}else{
echo "not connection";
}
mysqli_select_db( $conn, 'register');
$name = $_POST['name'];
$pass = $_POST['password'];
$password=md5($pass);

 $q = " SELECT * from users where name = '$name' &&  password= '$password'";
 $result=  mysqli_query($conn, $q);
 $num = mysqli_num_rows($result);




if($num==1)
{
    echo "duplicate data";
 
}
else{

$qy = "INSERT INTO users(name, password) values ('$name','$password')";
mysqli_query($conn, $qy);
}



 ?>
 