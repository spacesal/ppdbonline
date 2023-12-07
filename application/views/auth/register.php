<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>foto/logo_albiruni.png" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">    
</head>

<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="Registration form">
            <?php
            if ($this->session->flashdata('error') != '') {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('error');
                echo '</div>';
            }
            ?>
            <header>Register</header>
            <form action="<?php echo base_url('register/prosesregister');?>" method="post">
                <label>Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your Username">
                <label>Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <label>Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your Password">
                <input type="submit" class="button" value="Register"></button>
                <div class="signup">
                    <span class="signup">Have an account?
                        <a href="<?php echo site_url('home/login'); ?>">Login</a>
                    </span>
                </div>
            </form>
        </div>

    </div>
</body>

</html>