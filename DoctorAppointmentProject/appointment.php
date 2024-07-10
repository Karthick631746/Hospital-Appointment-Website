<?php
session_start();
$con = mysqli_connect("localhost","root","","appointment") or die(mysql_error());
if($_SERVER['REQUEST_METHOD']=="POST" )
{
    if(isset($_POST["register"])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $doa = $_POST['doa'];
    $time = $_POST['time'];
    $doctor = $_POST['doctor'];
    if(!empty($email)&& !empty($phno)&& !is_numeric($email))
    {
        $query = "insert into patients(firstname,lastname,dob,age,email,phno,dateofAppointement,times,consultant) values('$firstname','$lastname','$dob','$age','$email','$phno','$doa','$time','$doctor')";
        mysqli_query($con, $query);

        
        header("location: index.php");
        echo "<script type='text/javascript'> alert('Registered Successfully!')</script>";
        exit;
        
    }
    else{
        echo "<script type='text/javascript'> alert('Please enter valid credentials!')</script>";
    }

    }
}
?>