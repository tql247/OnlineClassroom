<?php
$list_user = $conn->query("SELECT * FROM assignment
                                                      WHERE `class_id` = " . $_SESSION["class_id"]);
while ($list_user->num_rows > 0 && $user = $list_user->fetch_assoc()) {
?>
    <div class="list-group-item d-flex justify-content-between d-middle-y">
        <div>
            <div class="d-flex w-100 justify-content-between">
                <!-- <h5><?= $user["fullname"] ?></h5> -->
            </div>
            <div>
            </div>
        </div>
        <div>
            <?php
            if (isset($_SESSION['Admin']) || isset($_SESSION['Teacher'])) { ?>

            <?php } ?>
        </div>
    </div>
<?php } ?>