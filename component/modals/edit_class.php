<div class="modal fade" id="editClass" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Nội dung cập nhật</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../service/updateClass.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" class="id_class" name="id_class" value="">
                    <div class="form-group">
                        <label for="class-name" class="col-form-label ">Tên lớp:</label>
                        <input type="text" name="class_name_update" class="form-control class-name class_name_update">
                    </div>
                    <div class="form-group">
                        <label for="course-name" class="col-form-label">Tên môn:</label>
                        <input type="text" name="class_course_update" class="form-control course-name class_course_update">
                    </div>
                    <div class="form-group">
                        <label for="class-room" class="col-form-label">Tên phòng:</label>
                        <input type="text" name="class_room_update" class="form-control class-room class_room_update">
                    </div>
                    <div class="form-group">
                        <label for="class-code" class="col-form-label">CODE:</label>
                        <input type="text" name="class_code_update" class="form-control class-code class_code_update">
                    </div>
                    <div class="form-group">
                        <input type="text" name="class_cover_update" class="form-control class-code class_cover_update d-none">
                        <label for="class_cover_update" class="col-form-label">Chọn ảnh bìa</label>
                        <input type="file" name="img" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                </div>
            </form>
        </div>
    </div>
</div>