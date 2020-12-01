<div class="list-group d-centroid">
    <?php
    session_start();
    require_once('../../connection/connector.php');
    if (isset($_REQUEST['class_id'])) {
        $_SESSION["class_id"] = $_REQUEST['class_id'];
    }

    $list_feed = $conn->query("SELECT * FROM feed WHERE `class_id` = " .$_SESSION['class_id']);
    while ($list_feed->num_rows > 0 && $feed = $list_feed->fetch_assoc()) {

    ?>
        <div id="feed_id_<?= $feed["id"] ?>" class="feed-item list-group-item flex-column align-items-start w-100">
            <div class="w-100 mb-3">
                <h4 class="mb-1 feed_title"><strong><?= $feed["title"] ?></strong></h4>
                <!-- <small>Thời gian đăng</small> -->
                <div class="float-right btn-float-right">
                    <?php if (isset($_SESSION['Admin']) || isset($_SESSION['Teacher'])) { ?>
                        <span type="button" data-toggle="modal" data-whatever="<?= $feed["id"] ?>" data-target="#editFeed" class="material-icons hv-3d">
                            create
                        </span>
                        <span type="button" data-toggle="modal" data-whatever="" data-target="#confirmDeleteFeed" class="material-icons hv-3d c-danger">
                            delete_forever
                        </span>
                    <?php } ?>
                </div>
            </div>
            <p class="mb-3 feed_content"">
                <?= $feed["description"] ?>
            </p>
            <div>
                <img src="../../storage/images/download.png" alt="">
            </div>
            <hr>
            <div class="cmt mt-1">
                <div class="title mb-4">
                    <h5>Thảo luận</h5>
                </div>
                <div class="cmt-section">
                    <div class="ls-cmt">
                        <?php
                        $list_cmt = $conn->query("SELECT * FROM comment WHERE feed_id = " . $feed["id"]);
                        while ($list_cmt->num_rows > 0 && $cmt = $list_cmt->fetch_assoc()) {
                            $user_cmt = $conn->query("SELECT * FROM user WHERE `id` = " . $cmt["user_id"]);
                            if ($user_cmt->num_rows > 0) {
                            $user_cmt_fullname = $user_cmt->fetch_assoc();
                        ?>
                            <div class="cmt">
                                <div class="list-group-item flex-column align-items-start mb-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6><strong>
                                        <?= $user_cmt_fullname["fullname"] ?>
                                        </strong></h6>
                                        <?php if (isset($_SESSION['Admin']) || isset($_SESSION['Teacher'])) { ?>
                                            <span type="button" data-toggle="modal" data-target="#confirmDeleteCMT" data-whatever="" class="noselect c-danger material-icons btn-float-right hv-3d">
                                                delete_forever
                                            </span>
                                    </div>
                                    <div>
                                        <span>
                                            <?= $cmt["content"] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        <?php } } } ?>
                    </div>
                    <div class="new-cmt">
                        <div class="input-group mb-1">
                            <input type="text" class="form-control" placeholder="Nhập thảo luận mới" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-secondary x-center" type="button">
                                    <span class="material-icons">
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
