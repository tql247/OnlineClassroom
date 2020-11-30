<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../static/style.css">
</head>

<body class="d-middle">
    <div class="registerbox m-5">
        <form>
            <div class="registerbox-header">
                <div>
                    <img src="../../storage/images/avatar.png" alt="Avatar" class="avatar">
                </div>
                <h1>ĐĂNG KÝ</h1>
            </br>
            </div>
            <div class="form-group">
                <label for="fullname">Họ và tên</label>
                <input type="text" class="form-control" id="fullname" placeholder="Nhập đầy đủ họ và tên" name="fullname">
            </div>
            <div>
                <label for="birth">Ngày sinh</label>
                <input type="date" id="birth" name="birth"></br>
            </div>
            <div class="form-group">
                <label for="Email">Địa chỉ Email</label>
                <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp" placeholder="Nhập email">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
            <div class="form-group">
                <label for="Password">Mật khẩu</label>
                <input type="password" class="form-control" name="Password" id="Password" placeholder="Mật khẩu">
            </div>
            <div>
                <input type="submit" class="account-btn hv-3d-lam bg-lam" name="" value="Đăng kí">
            </div>
            <a href="login.php" class="form-check-label">Trở lại đăng nhập</a>
        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>