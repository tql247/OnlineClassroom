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
                        <div class="card card-item" id="class_id_<?= $class["id"] ?>" style="width: 18rem;">
                            <img class="card-img-top" src="../../storage/images/download.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title class_name"><?= $class["class_name"] ?></h5>

                                <div>
                                    <div >Môn: <span class="course_name"><?= $class["course_name"] ?> </span></div>
                                    <div>Phòng: <span class="class_room"> <?= $class["class_room"]?></span></div>
                                    <div>Code: <span class="class_code" ><?= $class["class_code"] ?></span></div>
                                </div>
                                <div class="btn-full mt-1">
                                        <button type="button" name="idClass " class="btn btn-warning" data-toggle="modal" data-target="#editClass" data-whatever="<?= $class["id"] ?>">
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
                <form action="../../service/addClass.php" method="POST">    
                        
                        <div class="form-group">
                            <label for="class-name" class="col-form-label">Tên lớp:</label>
                            <input type="text" name="class_name" class="form-control" id="class-name">
                        </div>
                        <div class="form-group">
                            <label for="course-name" class="col-form-label">Tên môn:</label>
                            <input type="text" name="course_name" class="form-control" id="course-name">
                        </div>
                        <div class="form-group">
                            <label for="class-room" class="col-form-label">Tên phòng:</label>
                            <input type="text" name="class_room" class="form-control" id="class-room">
                        </div>
                        <div class="form-group">
                            <label for="class-code" class="col-form-label">CODE:</label>
                            <input type="text" name="class_code" class="form-control" id="class-code">
                        </div>
                        <div class="form-group">
                            <label for="class-cover" class="col-form-label">Chọn ảnh bìa</label>
                            <input type="file" class="form-control" id="class-cover">
                        </div>
                    </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                
                </div>
                </form>
                
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
                <form action="../../service/updateClass.php" method="POST" >
                <div class="modal-body">
                        <input type="hidden" class="id_class" name="id_class" value="">
                        <div class="form-group">
                            <label for="class-name" class="col-form-label ">Tên lớp:</label>
                            <input type="text" name="class_name_update" class="form-control class-name class_name_update">
                        </div>
                        <div class="form-group">
                            <label for="course-name" class="col-form-label">Tên môn:</label>
                            <input type="text" name="class_course_update" class="form-control course-name class_course_update" >
                        </div>
                        <div class="form-group">
                            <label for="class-room" class="col-form-label">Tên phòng:</label>
                            <input type="text" name="class_room_update" class="form-control class-room class_room_update" >
                        </div>
                        <div class="form-group">
                            <label for="class-code" class="col-form-label">CODE:</label>
                            <input type="text" name="class_code_update" class="form-control class-code class_code_update" >
                        </div>
                        <div class="form-group">
                            <label for="class-cover" class="col-form-label">Chọn ảnh bìa</label>
                            <input type="file" class="form-control class-cover class_cover_update" >
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                </div>
                </form>
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
                    <form method="POST" action="../../service/deleteClass.php">
                        <input type="hidden" class="id_class_delete" name="id_class_delete">
                        <button type="submit" class="btn btn-danger">Xoá</button>
                    </form>
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