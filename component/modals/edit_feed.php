<div class="modal fade" id="editFeed" tabindex="-1" role="dialog" aria-labelledby="editFeedLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editFeedLabel">Chỉnh sửa thông tin bài viết</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../service/updateFeed.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="id_feed" class="id-feed">
                <div class="form-group">
                    <label for="feed-title" class="col-form-label">Tiêu đề:</label>
                    <input type="text" name="feed_title" class="form-control feed_title" id="feed-title">
                </div>
                <div class="form-group">
                    <label for="feed-content" class="col-form-label">Nội dung:</label>
                    <textarea name="feed_content" class="form-control feed_content" id="feed-content"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="feed_cover d-none" name="feed_cover">
                    <label for="feed-cover" class="col-form-label">Chọn ảnh đính kèm mới:</label>
                    <input type="file" name="img" class="form-control" id="feed-cover">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            </div>
            </form>
        </div>
    </div>
</div>