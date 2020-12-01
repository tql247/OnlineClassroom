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
    <title>Danh sách sinh viên đang chờ duyệt</title>
</head>

<body>
    <main class="container">
        <br>
        <div class="app-view">
            <div class="app-bar">
                <h3>Teacher</h3>
                <br>
                <div>
                    <div class="controll">Lớp học đã tạo</a></div>
                    <br>
                    <br>
                    <div class="controll logout-btn"><a href="../../service/logout.php" class="no-decor">Đăng xuất</a></div>
                </div>
            </div>

            <div class="app-view-controll">
                <h3>Danh sách sinh viên đang chờ duyệt</h3>

                <br>


                <?php
                require_once('../../connection/connector.php');

                $list_user = $conn->query("SELECT * FROM student_pending WHERE `class_id` = " );
                while ($list_user->num_rows > 0 && $user = $list_user->fetch_assoc()) {
                ?>

                    <div class="list-group">
                        <div class="mb-1 list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">
                                    <?= $user["fullname"] ?>
                                </h5>
                                <small>
                                    <?= $user["role"] ?>
                                </small>
                            </div>
                            <div>
                                <div>Birth: <?= $user["birth"] ?></div>
                                <div>Email: <?= $user["email"] ?></div>
                                <div>Phone: <?= $user["phone"] ?></div>
                            </div>
                            <br>
                            <div class="d-flex">
                                <button type="button" class="btn btn-info flex-grow mr-1" data-toggle="modal" data-target="#confirmAllowJoinClass" data-whatever="<?= $class_detail["id"] ?>">
                                    Duyệt
                                </button>
                                <button type="button" class="btn btn-danger flex-grow ml-1" data-toggle="modal" data-target="#confirmDisallowJoinClass" data-whatever="<?= $class_detail["id"] ?>">
                                    Từ chối
                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    
    <!-- Modal Group-->
    <?php require("../../component/modals/confirm_allow_join_class.php") ?>
    <?php require("../../component/modals/confirm_disallow_join_class.php") ?>
    <!-- Modal Group-->

    <!-- Bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- My javascript below -->
    <script type="text/javascript" src="../../static/main.js"></script>
</body>

</html>