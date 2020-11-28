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
    <div class="login m-5 flt-r bg-light">
        <form>
            <div class="form-group">
                <label for="Email">Địa chỉ Email</label>
                <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp" placeholder="Nhập email">
                <small id="emailpwd" class="form-text text-muted">Nhập email để lấy lại mật khẩu.</small>
            </div>

            <div class="form-group form-check">                        
                <a href="login.php" class="form-check-label">Trở lại đăng nhập</a>
            </div>

            <button type="submit" class="btn btn-primary ">Dăng Nhập</button>
            <a href="register.php" class="btn btn-primary flt-r">Đăng Ký</a>
        </form>
    </div>
</body>
</html>