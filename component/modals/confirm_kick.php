<div class="modal fade" id="confirmKickStudent" tabindex="-1" role="dialog" aria-labelledby="confirmKickStudentLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmKickStudentLabel">Đuổi học viên?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Thao tác này không thể khôi phục, chắc chắn đuổi học viên?
            </div>
            <form action="../../service/kickStudent.php" method="POST">
            <input type="text" class="class_id d-none" name="class_id" value="<?= $_SESSION["class_id"] ?>">
            <input type="text" class="user_id d-none" name="user_id">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                <button type="submit" class="btn btn-danger">Đuổi</button>
            </div>
            </form>
        </div>
    </div>
</div>