<div class="modal fade" id="confirmDeleteFeed" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteFeedLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteFeedLabel">Xoá bài viết này?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Thao tác này không thể khôi phục, chắc chắn xoá?
            </div>
            <form action="../../service/deleteFeed.php" method="POST">
                <input class="feed_id d-none" name="feed_id" type="text"></input>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                    <button type="submit" class="btn btn-danger">Xoá</button>
                </div>
            </form>
        </div>
    </div>
</div>