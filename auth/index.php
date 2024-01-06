<?php include "../connection.php"; ?>
<?php session_start() ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
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



        <!-- php login action -->
        <?php
		
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from database
            $query = "select * from users where username = '$user_name' limit 1";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['id'];
                        header("Location:../index.php");
                        die;
                    }
                }
            }
            
            echo "SUCCESSFULLY LOGGED IN!ENJOY YOUR SHOPPING";
        }else
        {
            echo "wrong username or password!";
        }
    }

?>



        <div class="right">
            <h5>Login</h5>
            <p>Don't have an account? <a href="register.php">Creat Your Account</a> it takes less than a minute</p>
            <form action="" method="post">
                <div class="inputs">
                    <input type="text" name="username" placeholder="user name">
                    <br>
                    <input type="password" name="password" placeholder="password">
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
                <button type="submit" name="login">Login</button>
        </div>
        </form>
    </div>
    <!-- partial -->

</body>

</html>