<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="../../assets/admin/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="../../assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="../../assets/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../../assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../../assets/admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="../../assets/admin/css/pace.min.css" rel="stylesheet" />
	<script src="../../assets/admin/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="../../assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/admin/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="../../assets/admin/css/app.css" rel="stylesheet">
	<link href="../../assets/admin/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="../../assets/admin/css/dark-theme.css" />
	<link rel="stylesheet" href="../../assets/admin/css/semi-dark.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../../assets/admin/css/header-colors.css" />
	<title>Aurora Coffee - Admin Dashboard</title>
</head>

<body style="background-image: url('../../assets/admin/images/avatars/3.png'); width: 100%; height: 100vh; background-size: 100% 100%; overflow-x: hidden; background-repeat: no-repeat; overflow-x: hidden;">
	<!--wrapper-->
	<div class="wrapper">
		<!--start header wrapper-->
		<div class="header-wrapper ">
			<!--start header -->
			<header>
				<div class="topbar d-flex align-items-center">
					<nav class="navbar navbar-expand">
						<div class="topbar-logo-header">
							<div class="px-5 mx-4">
								<a href=".././indexAdmin.html">
									<img src="../../assets/admin/images/avatars/Aurora_Coffee.png" style="scale: 6;"
									class="logo-icon" alt="logo icon">
								</a>
							</div>

						</div>
						<div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
						<div class="top-menu ms-auto">
						</div>
						<div class="user-box dropdown">
							<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
								href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="../../assets/admin/admin/images/avatars/avatar-2.png" class="user-img"
									alt="user avatar">
								<div class="user-info ps-3">
									<p class="user-name mb-0">Minh Tuan Le</p>
									<p class="designattion mb-0">Manager</p>
								</div>
							</a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li><a class="dropdown-item" onclick="logout()"><i
											class='bx bx-log-out-circle'></i><span>Logout</span></a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
			<!--end header -->
			<!--navigation-->
			<div class="nav-container primary-menu">
				<div class="mobile-topbar-header">
					<div>
						<img src="../../assets/admin/admin/images/logo-icon.png" class="logo-icon" alt="logo icon">
					</div>
					<div>
						<h4 class="logo-text">Rukada</h4>
					</div>
					<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
					</div>
				</div>
                <nav class="navbar navbar-expand-xl w-100">
					<ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
						<li class="nav-item" >
							<a class="nav-link" href="/indexAdmin" >
								<div class="parent-icon"><i class="fa-solid fa-house"></i>
								</div>
								<div class="menu-title">Trang Chủ</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/pagesAdmin/ord">
								<div class="parent-icon"><i class="fa-solid fa-mug-saucer"></i>
								</div>
								<div class="menu-title">Đặt Món</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/pagesAdmin/ban">
								<div class="parent-icon"><i class="fa-solid fa-couch"></i>
								</div>
								<div class="menu-title">Quản Lý Bàn</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/pagesAdmin/donhang">
								<div class="parent-icon"><i class="fa-solid fa-couch"></i>
								</div>
								<div class="menu-title">Đơn Hàng</div>
							</a>
						</li>
						<li class="nav-item" >
							<a class="nav-link " href="/pagesAdmin/quanlykhachhang">
								<div class="parent-icon"><i class="fa-solid fa-couch"></i>
								</div>
								<div class="menu-title">Quản Lý Khách Hàng</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/pagesAdmin/diem-danh">
								<div class="parent-icon"><i class="fa-solid fa-business-time"></i>
								</div>
								<div class="menu-title">Chấm Công Nhân Viên</div>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
								data-bs-toggle="dropdown">
								<div class="parent-icon"><i class="fa-solid fa-bars-progress"></i>
								</div>
								<div class="menu-title">Quản Lý Cafe</div>
							</a>
							<ul class="dropdown-menu">
								<li> <a class="dropdown-item" href="/pagesAdmin/kho" target="_blank"><i
											class="bx bx-right-arrow-alt"></i>Kho</a>
								</li>
								<li> <a class="dropdown-item" href="/pagesAdmin/mon" target="_blank"><i
											class="bx bx-right-arrow-alt"></i>Món</a>
								</li>
								<li> <a class="dropdown-item" href="/pagesAdmin/vattu"
										target="_blank"><i class="bx bx-right-arrow-alt"></i>Vật Tư</a>
								</li>

							</ul>
						<li class="nav-item dropdown" style="background-color: #AB826B;">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" style="color:white"
								data-bs-toggle="dropdown">
								<div class="parent-icon"><i class="fa-solid fa-person"></i>
								</div>
								<div class="menu-title">Quản Lý Nhân Viên</div>
							</a>
							<ul class="dropdown-menu">
								<li> <a class="dropdown-item" href="/pagesAdmin/nhanvien"
										target="_blank"><i class="bx bx-right-arrow-alt"></i>Nhân viên</a>
								</li>
								<li> <a class="dropdown-item" href="/pagesAdmin/phanquyen"
										target="_blank"><i class="bx bx-right-arrow-alt"></i>Phân Quyền</a>
								</li>
								<li> <a class="dropdown-item" href="/pagesAdmin/quanlyluong"
										target="_blank"><i class="bx bx-right-arrow-alt"></i>Quản Lý Lương</a>
								</li>
								<li> <a class="dropdown-item" href="/pagesAdmin/quanlyluong"
										target="_blank"><i class="bx bx-right-arrow-alt"></i>Thưởng/Phạt</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="card" style="border-bottom: 5px solid  #AB826B;">
						<div class="card-header ">
							<h4 class=" mb-0 text-center align-middle py-2" style="color: #AB826B;"><b>Thưởng phạt</b>
							</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th class="text-center align-middle text-nowrap" style="background-color: #AB826B; color:white;"> # </th>
											<th class="text-center align-middle text-nowrap" style="background-color: #AB826B; color:white;">Tên Nhân Viên </th>
											<th class="text-center align-middle text-nowrap" style="background-color: #AB826B; color:white;">Tăng Ca </th>
											<th class="text-center align-middle text-nowrap" style="background-color: #AB826B; color:white;">Đi Trễ</th>
											<th class="text-center align-middle text-nowrap" style="background-color: #AB826B; color:white;">Ghi Chú Lỗi</th>
											<th class="text-center align-middle text-nowrap" style="background-color: #AB826B; color:white;"> Tình Trạng Thưởng Phạt</th>
											<th class="text-center align-middle text-nowrap" style="background-color: #AB826B; color:white;"> Action </th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th class="text-center align-middle text-nowrap">1</th>
											<td class="align-middle text-nowrap">Lê Minh Tuấn</td>
											<td class="align-middle text-nowrap">13:00h</td>
											<td class="align-middle text-nowrap">0</td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-primary" style="width: 100px;">Chi Tiết</button></td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-success" style="width: 100px;">Thưởng</button></td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#capNhatModal" style="width: 100px;">Cập
													Nhật</button><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#xoaModal" style="width: 100px;">Xóa</button></td>
										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">2</th>
											<td class="align-middle text-nowrap">Nguyễn Quang Huy</td>
											<td class="align-middle text-nowrap">13:00h</td>
											<td class="align-middle text-nowrap">4</td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-primary" style="width: 100px;">Chi Tiết</button></td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-danger" style="width: 100px;">Phạt</button></td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#capNhatModal" style="width: 100px;">Cập
													Nhật</button><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#xoaModal" style="width: 100px;">Xóa</button></td>

										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">3</th>
											<td class="align-middle text-nowrap">Đoàn Võ Văn Trọng</td>
											<td class="align-middle text-nowrap">13:00h</td>
											<td class="align-middle text-nowrap">0</td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-primary" style="width: 100px;">Chi Tiết</button></td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-success" style="width: 100px;">Thưởng</button></td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#capNhatModal" style="width: 100px;">Cập
													Nhật</button><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#xoaModal" style="width: 100px;">Xóa</button></td>

										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">4</th>
											<td class="align-middle text-nowrap">Nguyễn Đức Ninh</td>
											<td class="align-middle text-nowrap">00:00h</td>
											<td class="align-middle text-nowrap">0</td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-primary" style="width: 100px;">Chi Tiết</button></td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-success" style="width: 100px;">Thưởng</button></td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#capNhatModal" style="width: 100px;">Cập
													Nhật</button><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#xoaModal" style="width: 100px;">Xóa</button></td>

										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">5</th>
											<td class="align-middle text-nowrap">Phan Trần Thiện Ân</td>
											<td class="align-middle text-nowrap">08:00h</td>
											<td class="align-middle text-nowrap">17</td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-primary" style="width: 100px;">Chi Tiết</button></td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-danger" style="width: 100px;">Phạt</button></td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#capNhatModal" style="width: 100px;">Cập
													Nhật</button><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#xoaModal" style="width: 100px;">Xóa</button></td>
										</tr>
										<tr>
											<th class="text-center align-middle text-nowrap">6</th>
											<td class="align-middle text-nowrap">Nguyễn Văn An</td>
											<td class="align-middle text-nowrap">10:00h</td>
											<td class="align-middle text-nowrap">3</td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-primary" style="width: 100px;">Chi Tiết</button></td>
											<td class="text-center align-middle text-nowrap"><button class="btn btn-success" style="width: 100px;">Thưởng</button></td>
											<td class="text-center align-middle"><button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#capNhatModal" style="width: 100px;">Cập
													Nhật</button><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#xoaModal" style="width: 100px;">Xóa</button></td>

										</tr>
									</tbody>
								</table>
							</div>
							<div class="modal fade" id="capNhatModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h1 class="modal-title fs-5" id="exampleModalLabel">Cập Nhật Nhân Viên </h1>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-12"><label class="form-label">Tên Nhân
														Viên</label><input type="text" class="form-control" placeholder="Nhập tên Nhân Viên">
												</div>
												<div class="col-12"><label class="form-label mt-3">Lương Cơ Bản
														</label><input type="text" class="form-control" placeholder="Nhập lương cơ bản"></div>
												<div class="col-12"><label class="form-label mt-3">Thể Loại</label><select class="form-control">
														primary value="1"&gt;Chi Tiết
														<option value="0">Chi Tiết</option>
													</select></div>
											</div>
										</div>
										<div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cập Nhật</button></div>
									</div>
								</div>
							</div>
							<div class="modal fade" id="xoaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Nhân Viên</h1>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="alert alert-warning border-0 bg-warning alert-dismissible fade show py-2">
												<div class="d-flex align-items-center">
													<div class="font-35 text-dark"><i class="bx bx-info-circle"></i>
													</div>
													<div class="ms-3">
														<h6 class="mb-0 text-dark">Warning</h6>
														<div class="text-dark">
															<p>Bạn có muốn xóa <b>Nhân Viên</b> này không?
															</p>
															<p><b>Lưu ý:</b> Điều này không thể hoàn tác! </p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Xóa</button></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
				class='bx bxs-up-arrow-alt'></i></a>
	</div>
	<!-- Bootstrap JS -->
	<script src="../../assets/admin/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="../../assets/admin/js/jquery.min.js"></script>
	<script src="../../assets/admin/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="../../assets/admin/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="../../assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="../../assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="../../assets/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../../assets/admin/plugins/chartjs/js/Chart.min.js"></script>
	<script src="../../assets/admin/plugins/chartjs/js/Chart.extension.js"></script>
	<script src="../../assets/admin/js/index.js"></script>
	<!--app JS-->
	<script src="../../assets/admin/js/app.js"></script>
</body>

</html>
