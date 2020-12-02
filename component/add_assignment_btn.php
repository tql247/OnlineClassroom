<?php
if (isset($_SESSION['Admin']) || isset($_SESSION['Teacher'])) { ?>
    <div>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addAssignment">Thêm bài tập mới</button>
        <hr>
    </div>
<?php } ?>