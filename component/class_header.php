<div class="headerr mt-3 d-flex d-flex-horizon">
    <div>
        <a class="no-decor mt-3" href="../index.php">
            <span class="material-icons s-lg">
                home
            </span>
        </a>
    </div>
    <a href="../../service/logout.php" class="no-decor">
        <div class="controll logout-btn">Đăng xuất</div>
    </a>
</div>

<?php
session_start();
require_once('../../connection/connector.php');
if (isset($_REQUEST['class_id'])) {
    $_SESSION["class_id"] = $_REQUEST['class_id'];

}
?>