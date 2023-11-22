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
            <header>Register</header>
            <form action="" method="post">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter your Username">
                <label>Email</label> 
                <input type="text" name="email"   placeholder="Enter your email">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your Password">
                <label>Buat akun sebagai</label><br>
                <select name="role">
                    <option value="#">-Pilih-</option>
                    <option value="admin">Administrator</option>
                    <option value="user">Pendaftar</option>
                </select>
                <input type="button" class="button" value="Register">
            </form>
        </div>

    </div>
</body>

</html>