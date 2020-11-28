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
                <label for="Name">Họ và tên</label>
                <input type="text" class="form-control" id="Name" placeholder="Nhập đầy đủ họ và tên" name="Name">
            </div>

            <div class="form-group">
                <label for="Email">Địa chỉ Email</label>
                <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp" placeholder="Nhập email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="Password">Mật khẩu</label>
                <input type="password" class="form-control" name="Password" id="Password" placeholder="Mật khẩu">
            </div>

            <div class="form-group">
                <label for="rePassword">Nhập lại mật khẩu</label>
                <input type="password" class="form-control" name="rePassword" id="rePassword" placeholder="Nhập lại mật khẩu">
            </div>

            <div class="form-group">
                <label for="job">Chức vụ của bạn</label><br>
                <label class="radio-inline ml-3"><input type="radio" name="job" checked>Học Sinh</label>
                <label class="radio-inline ml-3"><input type="radio" name="job">Giáo Viên</label>
            </div>

            <div class="form-group form-check">             
                <a href="forgotpwd.php" class="form-check-label">Quên mật khẩu?</a>           
                <a href="login.php" class="form-check-label">Trở lại đăng nhập</a>
            </div>

            <button type="submit" class="btn btn-primary ">Dăng ký</button>

        </form>
    </div>
</body>
</html>