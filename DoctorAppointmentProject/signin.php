<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST" )
{
    if(isset($_POST["signin"])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!empty($email)&& !empty($password)&& !is_numeric($email))
    {
        $query = "insert into signin(name,username,password) values('$username','$email','$password')";
        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Registered Successfully!')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Please enter valid credentials!')</script>";
    }

    }
}
?>