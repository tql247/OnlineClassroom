<?php
    session_start();
    if (isset($_SESSION['email'])) {
        header('Location: class.php');
        exit();
    }
    require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
        require 'components/home_navbar.php'
    ?>

    <?php

        $error = '';

        $email = '';
        $pass = '';

        if (isset($_POST['email']) && isset($_POST['pass'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            if (empty($email)) {
                $error = 'Please enter your email';
            }
            else if (empty($pass)) {
                $error = 'Please enter your password';
            }
            else if (strlen($pass) < 6) {
                $error = 'Password must have at least 6 characters';
            }
            else {
                $data = login($email,$pass);
                if($data){
                    $_SESSION['email']=$user;
                    $_SESSION['name']= $data['hoten'] ;

                    header('Location: class.php');
                    exit();

                } else {
                    $error='Invalid username or password';
                }
            }
        }
    ?>

    <div class="login m-5 flt-r bg-light">
        <form method="post" action="" >
            <div class="form-group">
                <label for="email">Địa chỉ Email</label>
                <input value="<?= $email ?>" type="email" class="form-control" name="email" id="email" placeholder="Nhập email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="pass">Mật khẩu</label>
                <input value="<?= $pass ?>" type="password" class="form-control" name="pass" id="pass" placeholder="Mật khẩu">
            </div>

            <div class="form-group form-check">             
                <a href="forgotpwd.php" class="form-check-label">Quên mật khẩu?</a>
            </div>
                <?php
                    if (!empty($error)) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                ?>
            <button class="btn btn-primary flt-l">Login</button>
            <a href="register.php" class="btn btn-primary flt-r">Đăng Ký</a>
        </form>
    </div>
</body>
</html>