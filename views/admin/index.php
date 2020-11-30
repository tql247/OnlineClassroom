<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- My CSS -->
	<link rel="stylesheet" href="../../static/style.css">

	<!-- <link rel="icon" href="images/logobar.png"> -->
	<title>Account management</title>
</head>

<body>
	<main class="container">
		<br>
		<div class="app-view">
			<div class="app-bar">
				<h3>Admin</h3>
				<br>
				<div>
					<div class="controll active">Quản lý tài khoản</div>
					<div class="controll"><a class="no-decor" href="classmanagement.php">Quản lý lớp học</a></div>
					<br>
					<br>
					<div class="controll logout-btn">Đăng xuất</div>
				</div>
			</div>

			<div class="app-view-controll">
				<h3>Danh sách người dùng</h3>

				<br>


				<?php
				require_once('../../connection/connector.php');

				$list_user = $conn->query("SELECT * FROM user");
				while ($list_user->num_rows > 0 && $user = $list_user->fetch_assoc()) {
				?>

					<div class="list-group">
						<div class="mb-1 list-group-item flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1 target_user" data-user-id="<?= $user["id"] ?>">
									<?= $user["fullname"] ?>
								</h5>
								<small>
									<?= $user["role"] ?>
								</small>
							</div>
							<div>
								<div>Birth: <?= $user["birth"] ?></div>
								<div>Email: <?= $user["email"] ?></div>
								<div>Phone: <?= $user["phone"] ?></div>
							</div>
							<br>
							<select class="custom-select set-role">
								<option selected>Phân quyền</option>
								<option value="Admin">Admin</option>
								<option value="Teacher">Giảng viên</option>
								<option value="Student">Học viên</option>
							</select>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</main>


	<!-- Modal Group-->
	<div class="modal fade" id="confirmSetRole" tabindex="-1" role="dialog" aria-labelledby="confirmSetRoleLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="confirmSetRoleLabel">Xoá khoá học?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<input type="text" class="target-user">
				<div class="modal-body">
					Thao tác này không thể hoàn lại, chắc chắn cấp cho <span class="c-danger target-set-role"></span> quyền <span class="c-danger set-role-name"></span>?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
					<button type="button" class="btn btn-danger">Xoá</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Group-->

	<!-- Bootstrap CDN -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- My javascript below -->
	<script type="text/javascript" src="../../static/main.js"></script>
</body>

</html>