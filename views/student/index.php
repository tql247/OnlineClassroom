<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="../../static/style.css">

    <!-- <link rel="icon" href="images/logobar.png"> -->
    <title>Danh sách lớp học</title>
</head>

<body>
    <main class="container">
        <br>
        <div class="app-view">
            <div class="app-bar">
                <h3>Student</h3>
                <br>
                <div>
                    <div class="controll active">Lớp học đã tham gia</div>
                    <div class="controll"><a class="no-decor" href="class_pending.php">Lớp học đang chờ duyệt</a></div>
                    <br>
                    <br>
                    <div class="controll logout-btn"><a href="../../service/logout.php" class="no-decor">Đăng xuất</a></div>
                </div>
            </div>
            <div class="app-view-controll">
                <h3>Danh sách lớp học</h3>
                <form action="../../service/requestJoinClass.php" method="POST" class="form-inline d-flex">
                    <?php session_start(); ?>
                    <input type="text" name="user_id" class="d-none" value="<?= $_SESSION["Id_User"] ?>">
                    <?php session_abort(); ?>
                    <input name="class_code" class="flex-grow form-control mr-sm-2" type="Add" placeholder="Code">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tham gia lớp</button>
                </form>
                <br>
                <?php require("../../component/class_list.php") ?>
            </div>
        </div>
    </main>


    <!-- Modal Group-->
    <div class="modal fade" id="joinClass" tabindex="-1" role="dialog" aria-labelledby="addClassModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addClassModalLabel">Tham gia lớp học mới</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="class-code" class="col-form-label">CODE:</label>
                            <input type="text" class="form-control" id="class-code">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="button" class="btn btn-primary">Tham gia</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Group-->

    <!-- Bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- My javascript below -->
    <script type="text/javascript" src="../../static/main.js"></script>
</body>

</html>