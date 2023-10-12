<?php
session_start();


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



$q = " SELECT * from users where name = '$name' && password = '$password'";
$result=  mysqli_query($conn, $q);
$num = mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['name']= $name;
   header('location:/quiz_updatePanel/student.php');
}
else{
   header('location:login.php');
}


?>