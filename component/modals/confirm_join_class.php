<div class="modal fade" id="confirmJoinClass" tabindex="-1" role="dialog" aria-labelledby="confirmJoinClassLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmJoinClassLabel">Tham gia khoá học?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Thao tác này không thể khôi phục, chắc chắn tham gia?
            </div>
            <form action="../../service/joinClass.php" method="POST">
                <input type="text" name="class_id" class="class_id d-none">
                <input type="text" name="user_id" class="user_id d-none">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="submit" class="btn btn-info">Tham gia</button>
                </div>
            </form>
        </div>
    </div>
</div>