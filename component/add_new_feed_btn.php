<div class="d-middle">
    <?php
    if (isset($_SESSION['Admin']) || isset($_SESSION['Teacher'])) { ?>
        <div>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addFeed">Thêm bài mới</button>
            <hr>
        </div>
    <?php } ?>
</div>