<div class="list-group">
    <?php
    require_once('../../connection/connector.php');

    $list_user = $conn->query("SELECT * FROM user
                                WHERE `role` = 'Student'
                                AND `id` in (
                                    SELECT `user_id` from user_class
                                    WHERE `class_id` = " . $_SESSION["class_id"] . "
                                )
                                ");
    $conn->close();
    while ($list_user->num_rows > 0 && $user = $list_user->fetch_assoc()) {
    ?>
        <div class="list-group-item flex-column align-items-start mb-3">
            <div class="d-flex w-100 justify-content-between">
                <h5><?= $user["fullname"] ?></h5>
                <span data-target="#confirmKickStudent" data-whatever="<?= $user["id"] . '-' . $_SESSION["class_id"] ?>" data-toggle="modal" class="controll s-md float-right c-danger">&times;</span>
            </div>
            <div>
                <span>Email: <?= $user["email"] ?></span>
                <span>Phone: <?= $user["phone"] ?></span>
            </div>
        </div>
    <?php } ?>
</div>