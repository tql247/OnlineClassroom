<div class="modal fade" id="addFeed" tabindex="-1" role="dialog" aria-labelledby="addFeedLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFeedLabel">Thông tin bài viết mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../service/addFeed.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="class-name" class="col-form-label">Tiêu đề:</label>
                        <input type="text" name="feed-title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-name" class="col-form-label">Nội dung:</label>
                        <textarea class="form-control" name="feed-content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="class-cover" class="col-form-label">Chọn ảnh đính kèm</label>
                        <input type="file" class="form-control" accept="image/*" name="img">
                    </div>
                </div>
                <input type="text" name="class-id" class="d-none" value="<?= $_SESSION["class_id"] ?>">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>