<div class="modal fade" id="confirmDeleteClass" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteClassLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteClassLabel">Xoá khoá học?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Thao tác này không thể khôi phục, chắc chắn xoá?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                <form method="POST" action="../../service/deleteClass.php">
                    <input type="hidden" class="id_class_delete" name="id_class_delete">
                    <button type="submit" class="btn btn-danger">Xoá</button>
                </form>
            </div>
        </div>
    </div>
</div>