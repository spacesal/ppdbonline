<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>foto/logo_albiruni.png" />
    <!---Custom CSS File--->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Login</header>
            <form action="#" method="post">
                <label>Username</label>
                <input type="text" placeholder="Enter your Username">
                <label>Password</label>
                <input type="password" placeholder="Enter your Password">
                <a href="#">Forgot Password?</a>
                <input type="button" class="button" value="Login">

            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                    <a href="<?php echo site_url('home/register'); ?>">Register</a>
                </span>
            </div>
        </div>

    </div>
</body>

</html>