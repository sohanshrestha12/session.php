<?php
// session_start();


$em="sohanshrestha@yahoo.com";
$pa="password";
$email=$_POST['username'];
$password=$_POST['pass'];
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if($email==$em && $password==$pa)
        {
            setcookie("email",$email,time() + 5,"/");
            // $_SESSION['auth'] = true;
            header('location: ./index.php');
        }
        else{
            header('location: login.php');
        }
    }
?>