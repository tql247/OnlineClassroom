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
    <title>Class management</title>
</head>

<body>


    <main class="container">
        <br>
        <div class="app-view">
            <div class="app-bar">
                <h3>Teacher</h3>
                <br>
                <div>
                    <div class="controll active">Lớp học đã tạo</div>
                    <!-- <div class="controll"><a class="no-decor" href="student_pending.php">Sinh viên đang chờ duyệt</a></div> -->
                    <br>
                    <br>
                    <div class="controll logout-btn"><a href="../../service/logout.php" class="no-decor">Đăng xuất</a></div>
                </div>
            </div>

            <div class="app-view-controll">
                <h3>Danh sách lớp học</h3>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addClass">
                    Thêm lớp học
                </button>
                <br>
                <br>
                <form class="form-inline d-flex">
                    <input class="flex-grow form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

                <?php require("../../component/class_list.php") ?>
            </div>
        </div>
    </main>


    <!-- Modal Group-->
    <?php require("../../component/modals/add_class.php");
          require("../../component/modals/edit_class.php");
          require("../../component/modals/confirm_delete_class.php");
    ?>
    <!-- Modal Group-->


    <!-- Bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- My javascript below -->
    <script type="text/javascript" src="../../static/main.js"></script>
</body>

</html>