<div class="modal fade" id="addClass" tabindex="-1" role="dialog" aria-labelledby="addClassModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addClassModalLabel">Thông tin lớp học mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="../../service/addClass.php" method="POST">

                    <div class="form-group">
                        <label for="class-name" class="col-form-label">Tên lớp:</label>
                        <input type="text" name="class_name" class="form-control" id="class-name">
                    </div>
                    <div class="form-group">
                        <label for="course-name" class="col-form-label">Tên môn:</label>
                        <input type="text" name="course_name" class="form-control" id="course-name">
                    </div>
                    <div class="form-group">
                        <label for="class-room" class="col-form-label">Tên phòng:</label>
                        <input type="text" name="class_room" class="form-control" id="class-room">
                    </div>
                    <div class="form-group">
                        <label for="class-code" class="col-form-label">CODE:</label>
                        <input type="text" name="class_code" class="form-control" id="class-code">
                    </div>
                    <div class="form-group">
                        <label for="class-cover" class="col-form-label">Chọn ảnh bìa</label>
                        <input type="file" class="form-control" id="class-cover">
                    </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                <button type="submit" class="btn btn-primary">Thêm</button>

            </div>
            </form>

        </div>
    </div>
</div>