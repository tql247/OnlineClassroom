<div class="mb-3">
    <form action="../../service/inviteStudent.php" method="POST" class="form-inline d-flex">
        <input type="text" name="class_id" class="d-none" value="<?= $_SESSION["class_id"] ?>">
        <input name="student_email" class="flex-grow form-control mr-sm-2" type="Add" placeholder="Email học viên" aria-label="Add">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Thêm học viên</button>
    </form>
</div>