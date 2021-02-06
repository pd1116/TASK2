<?php

    session_start();
   
    $con=mysqli_connect('localhost','root');
    if($con)
    {
        echo "Connection successful!";
    }
    else {
        echo "No connection!....Failed!";
    }
    mysqli_select_db($con,'demo');

    $name=$_POST['username'];
    $pass=$_POST['password'];

    $q="select * from registered_users where username='$name' && password='$pass' ";

    $result = mysqli_query($con,$q);
    $num=mysqli_num_rows($result);


    if($num==1)
    {
        $_SESSION['username'] = $name;
        header('location:home.php');

    }
    else {
        header('location:index.php');

    }
?>
