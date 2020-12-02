<div class="modal fade" id="addAssignment" tabindex="-1" role="dialog" aria-labelledby="addAssignmentLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAssignmentLabel">Thông tin bài viết mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../service/addAssignment.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="assignment-name" class="col-form-label">Tên bài tập:</label>
                        <input type="text" name="feed-title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="assignment-name" class="col-form-label">Mô tả:</label>
                        <textarea class="form-control" name="assignment-name"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="birth">Ngày bắt đầu</label>
                        <input type="date" id="birth" name="assignment-open" class="lam-input"></br>
                    </div>
                    <div class="form-group">
                        <label for="birth">Ngày kết thúc</label>
                        <input type="date" id="birth" name="assignment-due" class="lam-input"></br>
                    </div>
                    <div class="form-group">
                        <label for="class-cover" class="col-form-label">Chọn tập tin đính kèm</label>
                        <input type="file" class="form-control" name="assignmen-attach">
                    </div>
                </div>
                <input type="text" name="class_id" class="d-none" value="<?= $_SESSION["class_id"] ?>">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>