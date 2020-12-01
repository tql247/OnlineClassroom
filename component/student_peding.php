<h5>Đang chờ duyệt</h5>
<div class="list-group">
    <?php
    $list_user = $conn->query("SELECT * FROM user
                                WHERE `role` = 'Student'
                                AND `id` in (
                                    SELECT `user_id` from user_class
                                    WHERE `class_id` = " . $_SESSION["class_id"] . " AND `status` = 's'
                                )
                                ");
    while ($list_user->num_rows > 0 && $user = $list_user->fetch_assoc()) {
    ?>
        <div class="list-group-item mb-3 d-flex justify-content-between d-middle-y">
            <div>
                <div class="d-flex w-100">
                    <h5><?= $user["fullname"] ?></h5>
                </div>
                <div>
                    <span>Email: <?= $user["email"] ?></span>
                    <span>Phone: <?= $user["phone"] ?></span>
                </div>
            </div>
            <div class="">
                <?php
                if (isset($_SESSION['Admin']) || isset($_SESSION['Teacher'])) { ?>
                    <button type="button" class="btn btn-info flex-grow mr-1" data-toggle="modal" data-target="#confirmAllowJoinClass" data-user-id="<?= $user["id"] ?>" data-class-id="<?= $_SESSION["class_id"] ?>">
                        Duyệt
                    </button>
                    <button type="button" class="btn btn-danger flex-grow ml-1" data-toggle="modal" data-target="#confirmDisallowJoinClass" data-user-id="<?= $user["id"] ?>" data-class-id="<?= $_SESSION["class_id"] ?>">
                        Từ chối
                    </button>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>