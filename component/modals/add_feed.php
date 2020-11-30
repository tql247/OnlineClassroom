<div class="modal fade" id="addFeed" tabindex="-1" role="dialog" aria-labelledby="addFeedLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFeedLabel">Thông tin lớp học mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="class-name" class="col-form-label">Tiêu đề:</label>
                        <input type="text" class="form-control" id="class-name">
                    </div>
                    <div class="form-group">
                        <label for="course-name" class="col-form-label">Nội dung:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="class-cover" class="col-form-label">Chọn ảnh đính kèm</label>
                        <input type="file" class="form-control" id="class-cover">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                <button type="button" class="btn btn-primary">Thêm</button>
            </div>
        </div>
    </div>
</div>