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
    <title>Danh sách lớp học đang chờ tham gia</title>
</head>

<body>
    <!-- <?= $_SESSION['Id_User'] ?> -->

    <main class="container">
        <br>
        <div class="app-view">
            <div class="app-bar">
                <h3>Student</h3>
                <br>
                <div>
                    <div class="controll"><a class="no-decor" href="index.php">Lớp học đã tham gia</a></div>
                    <div class="controll active">Lớp học đang chờ duyệt</div>
                    <br>
                    <br>
                    <div class="controll logout-btn"><a href="../../service/logout.php" class="no-decor">Đăng xuất</a></div>
                </div>
            </div>

            <div class="app-view-controll">
                <h3>Danh sách lớp học đang chờ tham gia</h3>
                <br>
                <div class="list-card">
                    <?php

                    require_once('../../connection/connector.php');
                    session_start();

                    $list_class = $conn->query("SELECT * FROM user_class WHERE `user_id` = " . $_SESSION["Id_User"] . " AND `status` = 'c'");
                    while ($list_class->num_rows > 0 && $class = $list_class->fetch_assoc()) {
                        $class_detail = $conn->query("SELECT * FROM class WHERE `id` = " . $class["class_id"])->fetch_assoc();
                    ?>
                        <div class="card card-item" style="width: 18rem;">
                            <img class="card-img-top" src="data:image/png;base64,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" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $class_detail["class_name"] ?></h5>
                                <div>
                                    <div>Môn: <?= $class_detail["course_name"] ?></div>
                                    <div>Phòng: <?= $class_detail["class_room"] ?></div>
                                </div>
                                <div class="btn-full mt-1">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#confirmJoinClass" data-class-id="<?= $class_detail["id"] ?>" data-user-id="<?= $_SESSION["Id_User"] ?>">
                                        Tham gia
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>


    <!-- Modal Group-->
    <?php require("../../component/modals/confirm_join_class.php") ?>
    <!-- Modal Group-->


    <!-- Bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- My javascript below -->
    <script type="text/javascript" src="../../static/main.js"></script>
</body>

</html>