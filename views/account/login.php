<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
</head>
<body class="centroid">
    <div class="loginbox">
        <form action="../../service/login.php" method="POST">
            <div class="imgcontainer">
                <img src="../../storage/images/avatar.png" alt="Avatar" class="avatar">
                <h1>ĐĂNG NHẬP</h1> </br>
            </div>
    
            <div class="form-group">
                <label for="username">Username</label>
                <input  type="text" class="form-control" name="username" id="username" placeholder="Nhập username">
            </div>

            <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu">
            </div>
            <a href="forgotpwd.php" >Quên mật khẩu</a>
            </br>
            <br>
            <input type="submit" name="" class="lam-input hv-3d-lam account-btn bg-lam" value="Login"></br>
            <a href="register.php">
                <input type="button" class="lam-input hv-3d account-btn bg-white c-lam shadow-soft" value="Đăng ký"></br>
            </a>
            </form>
    </div>
                  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>      
</body>
</html>