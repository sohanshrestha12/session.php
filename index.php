<?php
    // session_start();

    // if(isset($_SESSION['auth'])){
    //     header('location: index.php');
    // }
    // else{
    //     header('location: login.php');
    // }

    if(!isset($_COOKIE['email'])){
        header('location: login.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index page</title>
</head>
<body>
    <h1>Welcome to Index page</h1>
</body>
</html>

