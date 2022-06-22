<?php
include ('config.php');
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    if($row['username']==$username && $row['password']==$password){
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        header("Location:home.php");
    }
    else{
        header("Location: index.php?error=Incorect User name or password");
    }
}
?>