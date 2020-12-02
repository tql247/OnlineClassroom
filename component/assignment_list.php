<?php
$list_assignment = $conn->query("SELECT * FROM assignment WHERE `class_id` = " . $_SESSION["class_id"]);
while ($list_assignment->num_rows > 0 && $assignment = $list_assignment->fetch_assoc()) {
?>
    <div class="list-group-item d-flex justify-content-between d-middle-y">
        <div>
            <div class="d-flex w-100 justify-content-between">
                <h5><?= $assignment["title"] ?></h5>
            </div>
                <h6>
                    <?= $assignment["description"] ?>
                </h6>
            <small>
                Đính kèm: <a download href="../../upload_file/<?= $assignment['attach'] ?>"><?= $assignment["attach"] ?></a>
            </small>
            <br>
            <small>Từ <?= $assignment["open"] ?> đến <?= $assignment["due"] ?></small>
        </div>
    </div>
<?php } ?>