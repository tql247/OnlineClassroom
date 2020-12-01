<div class="modal fade" id="confirmAllowJoinClass" tabindex="-1" role="dialog" aria-labelledby="confirmJoinClassLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmJoinClassLabel">Cho phép sinh viên tham gia lớp học?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Thao tác này không thể hoàn lại, chắc chắn cho phép tham gia?
            </div>
            <form action="../../service/allowJoinClass.php" method="POST">
                <input type="text" class="user_id d-none" name="user_id">
                <input type="text" class="class_id d-none" name="class_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="submit" class="btn btn-info">Cho phép</button>
                </div>
            </form>
        </div>
    </div>
</div>