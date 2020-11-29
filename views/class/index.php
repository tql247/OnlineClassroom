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
    <title>Stream</title>
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
                        <div class="controll-title active">Stream</div>
                        <div class="controll-title"><a class="no-decor" href="people.php">Học viên</a></div>
                    </div>
                    <hr>
                    <div>
                        <div class="d-middle">
                            <div>
                                <div class="d-middle">
                                    <?php if (1) { ?>
                                        <div>
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addFeed">Thêm bài mới</button>
                                            <hr>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="list-group">
                                    <?php
                                    require_once('../../connection/connector.php');

                                    $list_feed = $conn->query("SELECT * FROM feed
                                                               WHERE `class_id` = 2");
                                    $conn->close();
                                    while ($list_feed->num_rows > 0 && $feed = $list_feed->fetch_assoc()) {
                                    ?>
                                        <div class="feed-item list-group-item flex-column align-items-start">
                                            <div class="w-100 mb-3">
                                                <h4 class="mb-1"><?= $feed["title"] ?></h4>
                                                <!-- <small>Thời gian đăng</small> -->
                                                <div class="float-right s-md controll">...</div>
                                            </div>
                                            <p class="mb-3">
                                                <?= $feed["description"] ?>    
                                            </p>
                                            <div>
                                                <img width="100%" src="<?= $feed["attach"] ?>" alt="">
                                            </div>
                                            <hr>
                                            <div class="cmt mt-1">
                                                <div class="title mb-4">
                                                    <h5>Thảo luận</h5>
                                                </div>
                                                <div class="cmt-section">
                                                    <div class="ls-cmt">
                                                        <div class="cmt">
                                                            <div class="list-group-item flex-column align-items-start mb-3">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <h6>Tên người thảo luận</h6>
                                                                    <?php if (1) { ?>
                                                                        <span class="s-sm float-right controll">...</span>
                                                                    <?php } ?>
                                                                </div>
                                                                <div>
                                                                    <span>
                                                                        Nội dung thảo luận
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="new-cmt">
                                                        <div class="input-group mb-1">
                                                            <input type="text" class="form-control" placeholder="Nhập thảo luận mới" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-secondary centroid" type="button">
                                                                    <span class="material-icons s-sm">
                                                                        send
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </main>



    <!-- Modal Group-->
    <div class="modal fade" id="addFeed" tabindex="-1" role="dialog" aria-labelledby="addFeedLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFeedLabel">Thông tin lớp học mới</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="class-name" class="col-form-label">Tiêu đề:</label>
                            <input type="text" class="form-control" id="class-name">
                        </div>
                        <div class="form-group">
                            <label for="course-name" class="col-form-label">Nội dung:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="class-cover" class="col-form-label">Chọn ảnh đính kèm</label>
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
    <!-- Modal Group-->


    <!-- Bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- My javascript below -->
    <script type="text/javascript" src="../../static/main.js"></script>
</body>

</html>