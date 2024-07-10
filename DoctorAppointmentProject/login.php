<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST" )
{
// if(isset($_POST["login"])){
    $gmail = $_POST['lemail'];
    $password = $_POST['lpassword'];
        
                if(!empty($gmail)&& !empty($password)&& !is_numeric($gmail))
                {
                    $query = "select * from signin where username = '$gmail' limit 1 ";
                    $result = mysqli_query($con, $query); 
                    if($result){
                        if($result && mysqli_num_rows($result)> 0)
                        {
                        $user_data = mysqli_fetch_assoc($result);
                        if($user_data['password']==$password)
                        {
                            header("location: index.php");
                            exit;
                        }
                        }
                        
                        
                    }
                    
                        echo "<script type='text/javascript'> alert('Enter correct password or email')</script>";
                    
                    
                }
                else{
                    echo "<script type='text/javascript'> alert('Enter correct password or email')</script>";
                }
                

    }
?>