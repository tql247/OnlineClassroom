<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="../../static/style.css">

    <!-- <link rel="icon" href="images/logobar.png"> -->
    <title>Class management</title>
</head>

<body>

    <main class="container">
        <div class="headerr mt-3 d-flex d-flex-horizon">
            <div>
                <a class="no-decor mt-3" href="../index.php">
                    <span class="material-icons s-lg">
                        home
                    </span>
                </a>
            </div>
            <div class="controll logout-btn">Đăng xuất</div>
        </div>
        <br>
        <div class="app-view">
            <div class="app-view-controll">
                <div class="class-cover">
                    <div class="cover-image">
                        <img width="100%" height="auto" src="https://media.sproutsocial.com/uploads/2017/03/Facebook-Event-Photo.png" alt="">
                    </div>
                    <div class="p-3">
                        <h2 class="class-title">Tên lớp học</h2>
                        <h5 class="class-title">Tên môn học</h5>
                        <!-- <h4 class="class-title">Giảng viên</h4> -->
                    </div>
                </div>
                <br>

                <div class="content">
                    <div class="controll-bar d-flex">
                        <div class="controll-title"><a class="no-decor" href="index.php">Stream</a></div>
                        <div class="controll-title active">Học viên</div>
                    </div>
                    <hr>
                    <br>
                    <br>
                    <div>
                        <div>
                            <div class="mb-3">
                                <form class="form-inline d-flex">
                                    <input class="flex-grow form-control mr-sm-2" type="Add" placeholder="Email học viên" aria-label="Add">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Thêm học viên</button>
                                </form>
                            </div>
                            <div class="list-group">
                                <?php
                                require_once('../../connection/connector.php');

                                $list_user = $conn->query("SELECT * FROM user
                                                            WHERE `role` = 'Student'
                                                            AND `id` in (
                                                                SELECT `user_id` from user_class
                                                                WHERE `class_id` = 1
                                                            )
                                ");
                                $conn->close();
                                while ($list_user->num_rows > 0 && $user = $list_user->fetch_assoc()) {
                                ?>
                                    <div class="list-group-item flex-column align-items-start mb-3">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5><?= $user["fullname"] ?></h5>
                                            <span data-target="#confirmKickStudent" data-whatever="<?= $user["id"] .'-'. 2 ?>" data-toggle="modal" class="controll s-md float-right c-danger">&times;</span>
                                        </div>
                                        <div>
                                            <span>Email: <?= $user["email"] ?></span>
                                            <span>Phone: <?= $user["phone"] ?></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Modal Group-->
    <div class="modal fade" id="confirmKickStudent" tabindex="-1" role="dialog" aria-labelledby="confirmKickStudentLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmKickStudentLabel">Đuổi học viên?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Thao tác này không thể khôi phục, chắc chắn đuổi học viên?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="button" class="btn btn-danger">Đuổi</button>
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