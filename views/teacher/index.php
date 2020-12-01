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
                    <div class="controll"><a class="no-decor" href="student_pending.php">Sinh viên đang chờ duyệt</a></div>
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

                <div class="list-card">
                    <?php
                    require_once('../../connection/connector.php');

                    $list_class = $conn->query("SELECT * FROM user_class WHERE `class_id` = 1");
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
                                    <div>Code: <?= $class_detail["class_code"] ?></div>
                                </div>
                                <div class="btn-full mt-1">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editClass" data-whatever="<?= $class_detail["id"] ?>">
                                        Chỉnh sửa
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteClass" data-whatever="<?= $class_detail["id"] ?>">
                                        Xoá
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
    <div class="modal fade" id="addClass" tabindex="-1" role="dialog" aria-labelledby="addClassModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addClassModalLabel">Thông tin lớp học mới</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="class-name" class="col-form-label">Tên lớp:</label>
                            <input type="text" class="form-control" id="class-name">
                        </div>
                        <div class="form-group">
                            <label for="course-name" class="col-form-label">Tên môn:</label>
                            <input type="text" class="form-control" id="course-name">
                        </div>
                        <div class="form-group">
                            <label for="class-room" class="col-form-label">Tên phòng:</label>
                            <input type="text" class="form-control" id="class-room">
                        </div>
                        <div class="form-group">
                            <label for="class-code" class="col-form-label">CODE:</label>
                            <input type="text" class="form-control" id="class-code">
                        </div>
                        <div class="form-group">
                            <label for="class-cover" class="col-form-label">Chọn ảnh bìa</label>
                            <input type="file" class="form-control" id="class-cover">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="button" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editClass" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Nội dung cập nhật</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="class-name" class="col-form-label">Tên lớp:</label>
                            <input type="text" class="form-control" id="class-name">
                        </div>
                        <div class="form-group">
                            <label for="course-name" class="col-form-label">Tên môn:</label>
                            <input type="text" class="form-control" id="course-name">
                        </div>
                        <div class="form-group">
                            <label for="class-room" class="col-form-label">Tên phòng:</label>
                            <input type="text" class="form-control" id="class-room">
                        </div>
                        <div class="form-group">
                            <label for="class-code" class="col-form-label">CODE:</label>
                            <input type="text" class="form-control" id="class-code">
                        </div>
                        <div class="form-group">
                            <label for="class-cover" class="col-form-label">Chọn ảnh bìa</label>
                            <input type="file" class="form-control" id="class-cover">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="button" class="btn btn-primary">Sửa</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmDeleteClass" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteClassLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteClassLabel">Xoá khoá học?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Thao tác này không thể khôi phục, chắc chắn xoá?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="button" class="btn btn-danger">Xoá</button>
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