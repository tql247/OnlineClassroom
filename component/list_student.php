<h5>Học viên hiện có</h5>
<div class="list-group">
    <?php

    $list_user = $conn->query("SELECT * FROM user
                                WHERE `role` = 'Student'
                                AND `id` in (
                                    SELECT `user_id` from user_class
                                    WHERE `class_id` = " . $_SESSION["class_id"] . " AND `status` = 'j'
                                )
                                ");
    while ($list_user->num_rows > 0 && $user = $list_user->fetch_assoc()) {
    ?>
        <div class="list-group-item d-flex justify-content-between d-middle-y">
            <div>
                <div class="d-flex w-100 justify-content-between">
                    <h5><?= $user["fullname"] ?></h5>
                </div>
                <div>
                    <span>Email: <?= $user["email"] ?></span>
                    <span>Phone: <?= $user["phone"] ?></span>
                </div>
            </div>
            <div>
                <?php
                if (isset($_SESSION['Admin']) || isset($_SESSION['Teacher'])) { ?>
                    <button class="btn btn-danger" type="button" data-target="#confirmKickStudent" data-user-id="<?= $user["id"]?>" data-class-id="<?= $_SESSION["class_id"] ?>" data-toggle="modal">
                        Đuổi
                    </button>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>