<div class="class-cover">
    <div class="cover-image">
        <img width="100%" height="auto" src="https://media.sproutsocial.com/uploads/2017/03/Facebook-Event-Photo.png" alt="">
    </div>
    <div class="p-3">
        <?php
            $sql = "SELECT * FROM class WHERE `id` = " . $_SESSION["class_id"] ;
            if($conn->query($sql) ===False){
                die("ERROR:". $sql. $conn->error );
            } else {
                $class = $conn->query($sql)->fetch_assoc();
            }
        ?>
        <h2 class="class-title"><?= $class["class_name"] ?></h2>
        <h5 class="class-title"><?= $class["course_name"] ?></h5>
        <h5 class="class-title">Phòng: <?= $class["class_room"] ?></h5>
        <!-- Dưới đây là id của class, lấy thông số này bổ sung vào bảng feed -->
        <!-- <h4 class="class_id c-danger"><?= $_SESSION["class_id"] ?>: là id của lớp học</h4> -->
    </div>
</div>