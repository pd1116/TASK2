<?php

    session_start();
    header('location:index.php');
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
    $d=$_POST['dateofbirth'];
    $mail=$_POST['email'];

    $q="SELECT * FROM registered_users WHERE username='$name' && password='$pass' && email='$mail' && dateofbirth='$d' ";

    $result = mysqli_query($con,$q);
    $num=mysqli_num_rows($result);


    if($num==1)
    {
        echo "Username Already Exits!!";
    }
    else {
        $sql = "INSERT INTO registered_users (username,password,email,dateofbirth)
        VALUES ('$name','$pass','$mail','$d')";
        mysqli_query($con,$sql);
    }
?>
