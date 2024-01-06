<?php include "../connection.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>V heads samani</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>V heads samani</h1>
                <p> Build you home we'll design it for you</p>
                <span>

                    <a href="register.php">Register Now</a>
                </span>
            </div>
        </div>
        <!-- php register code -->
        <?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['username'];
        $password = $_POST['password'];

      
            //read from database
            $query = "INSERT INTO users(username,password)VALUES('{$user_name}','{$password}')";
            $result = mysqli_query($conn, $query);
            if($result){
                header("Location:index.php");
            }

    }

?>


        <div class="right">
            <h5>Register</h5>
            <p>Already have an account? <a href="index.php">Login into Your Account</a> it takes less than a minute</p>
            <form action="" method="post">
                <div class="inputs">
                    <input type="text" name="username" placeholder="desired username">
                    <br>
                    <input type="password" name="password" placeholder="your password here">
                </div>

                <br><br>

                <div class="remember-me--forget-password">
                    <!-- Angular -->
                    <label>
                        <input type="checkbox" name="item" checked />
                        <span class="text-checkbox">Remember me</span>
                    </label>
                    <p>forget password?</p>
                </div>

                <br>
                <button type="submit" name="submit">Register</button>
        </div>
        </form>
    </div>
    <!-- partial -->

</body>

</html>