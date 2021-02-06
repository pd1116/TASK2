<?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        header('location:index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav style="height: 100px;" class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <div class="container">
                    <h2 class="text-center text-success" >Welcome <?php echo $_SESSION['username']; ?></h2>
                    
                </div>    
                </ul>
                <form class="d-flex">
                    <a style="text-decoration: none;font-size: 32px;font-weight: 900;"href="logout.php">LOGOUT</a>
                </form>
            
            </div>
        </div>
    </nav>
   <div class="container">
        <div class="con-text">
            Hey !! , Its a Home Page
        </div>
   </div>
</body>
</html>