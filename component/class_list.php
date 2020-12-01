<div class="list-card">
    <?php
    require_once('../../connection/connector.php');
    session_start();
    if (isset($_SESSION["Teacher"])) {
        $list_class = $conn->query("SELECT * FROM class
                                    WHERE `id` in (
                                        SELECT `class_id` FROM user_class
                                        WHERE `user_id` = " . $_SESSION["Id_User"] .
            " AND `user_id` in (
                                            SELECT `id` FROM user
                                            WHERE `role` = 'Teacher'
                                        )
                                    )");
    } else if (isset($_SESSION["Student"])) {
        $list_class = $conn->query("SELECT * FROM class
                                    WHERE `id` in (
                                        SELECT `class_id` FROM user_class
                                        WHERE `user_id` = " . $_SESSION["Id_User"] .
            " AND `status` = 'j'
                                        AND `user_id` in (
                                            SELECT `id` FROM user
                                            WHERE `role` = 'Student'
                                        )
                                    )");
    } else {
        $list_class = $conn->query("SELECT * FROM class");
    }
    while ($list_class->num_rows > 0 && $class = $list_class->fetch_assoc()) {
    ?>
        <div class="card card-item" id="class_id_<?= $class["id"] ?>">
            <img class="card-img-top" src="../../storage/images/download.png" alt="Card image cap">
            <div class="card-body">
                <a href="../class/index.php?class_id=<?= $class['id'] ?>" class="no-decor text-success">
                    <h5 class="card-title class_name"><?= $class["class_name"] ?></h5>
                </a>

                <div>
                    <div>Môn: <span class="course_name"><?= $class["course_name"] ?> </span></div>
                    <div>Phòng: <span class="class_room"> <?= $class["class_room"] ?></span></div>
                    <div>Code: <span class="class_code"><?= $class["class_code"] ?></span></div>
                </div>
                <div class="btn-full mt-1">
                    <?php if (isset($_SESSION['Admin']) || isset($_SESSION['Teacher'])) { ?>
                        <button type="button" name="idClass " class="btn btn-warning" data-toggle="modal" data-target="#editClass" data-whatever="<?= $class["id"] ?>">
                            Chỉnh sửa
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteClass" data-whatever="<?= $class["id"] ?>">
                            Xoá
                        </button>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>