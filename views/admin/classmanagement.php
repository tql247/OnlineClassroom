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
                <h3>Admin</h3>
                <br>
                <div>
                    <div class="controll"><a class="no-decor" href="index.php">Quản lý tài khoản</a></div>
                    <div class="controll active">Quản lý lớp học</div>
                    <br>
                    <br>
                    <div class="controll logout-btn">Đăng xuất</div>
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

                    $list_class = $conn->query("SELECT * FROM class");
                    while ($list_class->num_rows > 0 && $class = $list_class->fetch_assoc()) {
                    ?>
                        <div class="card card-item" style="width: 18rem;">
                            <img class="card-img-top" src="../../storage/images/download.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $class["class_name"] ?></h5>

                                <div>
                                    <div>Môn: <?= $class["course_name"] ?></div>
                                    <div>Phòng: <?= $class["class_room"] ?></div>
                                    <div>Code: <?= $class["class_code"] ?></div>
                                </div>
                                <div class="btn-full mt-1">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editClass" data-whatever="<?= $class["id"] ?>">
                                        Chỉnh sửa
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteClass" data-whatever="<?= $class["id"] ?>">
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