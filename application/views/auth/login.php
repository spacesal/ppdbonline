<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>foto/logo_albiruni.png" />
    <!---Custom CSS File--->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <?php
            if ($this->session->flashdata('error') != '') {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('error');
                echo '</div>';
            }
            ?>

            <?php
            if ($this->session->flashdata('success_register') != '') {
                echo '<div class="alert alert-info" role="alert">';
                echo $this->session->flashdata('success_register');
                echo '</div>';
            }
            ?>
            <header>Login</header>
            <form action="<?= base_url('login/proseslogin'); ?>" method="post">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter your Username">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your Password">
                <a href="#">Forgot Password?</a>
                <input type="submit" class="button" value="Login">

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