<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="../assets/admin/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="../assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="../assets/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="../assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="../assets/admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="../assets/admin/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/admin/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="../assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/admin/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="../assets/admin/css/app.css" rel="stylesheet">
    <link href="../assets/admin/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="../assets/admin/css/dark-theme.css" />
    <link rel="stylesheet" href="../assets/admin/css/semi-dark.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/admin/css/header-colors.css" />
    <title>Aurora Coffee - Admin Dashboard</title>
</head>

<body
    style="background-image: url('../assets/admin/images/avatars/3.png'); width: 100%; height: 100%; background-size: 100% 100%; overflow-x: hidden; background-repeat: no-repeat; overflow-x: hidden;">
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
                                <a href="./indexAdmin">
                                    <img src="../assets/admin/images/avatars/Aurora_Coffee.png" style="scale: 6;"
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
                                <img src="../assets/admin/images/avatars/avatar-1.png" class="user-img"
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
                        <img src="../assets/admin/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    </div>
                    <div>
                        <h4 class="logo-text">Rukada</h4>
                    </div>
                    <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                    </div>
                </div>
                <nav class="navbar navbar-expand-xl w-100">
					<ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
						<li class="nav-item">
							<a class="nav-link" href="/indexAdmin" >
								<div class="parent-icon"><i class="fa-solid fa-house"></i>
								</div>
								<div class="menu-title">Trang Chủ</div>
							</a>
						</li>
						<li class="nav-item"  style="background-color: #AB826B;">
							<a class="nav-link" href="/pagesAdmin/ord" style="color:white">
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
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
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
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="row product-grid">
                        <div class="col-6">
                            <h3>
                                <div class="mt-3 mb-3 font11"><b>COFFEE</b></div>
                            </h3>
                        </div>
                        <div class="col-6 mt-2 text-end">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                THANH TOÁN
                            </button>

                            <!-- Modal -->

                        </div>

                        <div class="col-3">
                            <div class="card">
                                <img src="http://huyennganbakery.vn/uploads/images/S%E1%BB%B0%20KI%E1%BB%86N/z2535807234421_a436ebe3e0cad6fee6043801810add3f.jpg"
                                    class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h6 class="card-title cursor-pointer"><b>CAFFE ĐEN</b></h6>
                                    <div class="clearfix text-end">
                                    </div>
                                    <div class="cursor-pointer">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-secondary"></i>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 fs-6">
                                        <button class="btn btn-secondary">Đặt Món</button>
                                        <p class="mb-0 ms-auto"><b>25,000vnd</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-3">
                            <div class="card">
                                <img src="https://wonderlust.vn/wp-content/uploads/2023/07/5-Coconut-Latte-Ice-Blended-scaled-e1689062674756.jpg	"
                                    class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h6 class="card-title cursor-pointer"><b>Cà Phê Dừa (Nóng/Đá)</b></h6>
                                    <div class="clearfix text-end">
                                    </div>
                                    <div class="cursor-pointer">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-secondary"></i>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 fs-6">

                                        <button class="btn btn-secondary">Đặt Món</button>
                                        <p class="mb-0 ms-auto"><b>45,000vnd</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="https://wonderlust.vn/wp-content/uploads/2022/05/COCONAT2800-scaled.jpeg"
                                    class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h6 class="card-title cursor-pointer"><b>Cà Phê Sữa Pudding</b></h6>
                                    <div class="clearfix text-end">
                                    </div>
                                    <div class="cursor-pointer">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 fs-6">

                                        <button class="btn btn-secondary">Đặt Món</button>
                                        <p class="mb-0 ms-auto"><b>35,000vnd</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="http://huyennganbakery.vn/uploads/files/latte%201%2C1%20v.jpg"
                                    class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h6 class="card-title cursor-pointer"><b>Latte</b></h6>
                                    <div class="clearfix text-end">
                                    </div>
                                    <div class="cursor-pointer">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 fs-6">

                                        <button class="btn btn-secondary">Đặt Món</button>
                                        <p class="mb-0 ms-auto"><b>25,000vnd</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row product-grid">
                        <div class="col-3">
                            <div class="card">
                                <img src="http://huyennganbakery.vn/uploads/images/S%E1%BB%B0%20KI%E1%BB%86N/z2535807234421_a436ebe3e0cad6fee6043801810add3f.jpg"
                                    class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h6 class="card-title cursor-pointer"><b>CAFFE ĐEN</b></h6>
                                    <div class="clearfix text-end">
                                    </div>
                                    <div class="cursor-pointer">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 fs-6">

                                        <button class="btn btn-secondary">Đặt Món</button>
                                        <p class="mb-0 ms-auto"><b>25,000vnd</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="http://huyennganbakery.vn/uploads/files/Cappu%20v.jpg" class="card-img-top"
                                    alt="...">

                                <div class="card-body">
                                    <h6 class="card-title cursor-pointer"><b>Cappuccino</b></h6>
                                    <div class="clearfix text-end">
                                    </div>
                                    <div class="cursor-pointer">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-secondary"></i>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 fs-6">

                                        <button class="btn btn-secondary">Đặt Món</button>
                                        <p class="mb-0 ms-auto"><b>35,000vnd</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="http://huyennganbakery.vn/uploads/files/Ca%20Phe%20Y%20V.jpg"
                                    class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h6 class="card-title cursor-pointer"><b>Espresso</b></h6>
                                    <div class="clearfix text-end">
                                    </div>
                                    <div class="cursor-pointer">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-secondary"></i>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 fs-6">

                                        <button class="btn btn-secondary">Đặt Món</button>
                                        <p class="mb-0 ms-auto"><b>27,000vnd</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product-grid">

                    </div>
                    <div class="row product-grid">
                        <h3>
                            <div class="mt-3 mb-3 font11"><b>CARAMEL</b></div>
                        </h3>
                        <div class="col-3">
                            <div class="card">
                                <img src="https://wonderlust.vn/wp-content/uploads/2023/07/43-Caramel-coffee-latte-3-300x300.jpg"
                                    class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h6 class="card-title cursor-pointer"><b>Caramel coffee latte</b></h6>
                                    <div class="clearfix text-end">
                                    </div>
                                    <div class="cursor-pointer">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-secondary"></i>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 fs-6">
                                        <button class="btn btn-secondary">Đặt Món</button>
                                        <p class="mb-0 ms-auto"><b>55,000vnd</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="https://wonderlust.vn/wp-content/uploads/2023/07/41-Caramel-brown-sugar-300x300.jpg"
                                    class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h6 class="card-title cursor-pointer"><b>Caramel brown sugar</b></h6>
                                    <div class="clearfix text-end">
                                    </div>
                                    <div class="cursor-pointer">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-secondary"></i>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 fs-6">

                                        <button class="btn btn-secondary">Đặt Món</button>
                                        <p class="mb-0 ms-auto"><b>55,000vnd</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="https://wonderlust.vn/wp-content/uploads/2023/07/42-Caramel-matcha-latte-2-300x300.jpg"
                                    class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h6 class="card-title cursor-pointer"><b>Caramel Matcha Latte</b></h6>
                                    <div class="clearfix text-end">
                                    </div>
                                    <div class="cursor-pointer">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 fs-6">

                                        <button class="btn btn-secondary">Đặt Món</button>
                                        <p class="mb-0 ms-auto"><b>65,000vnd</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Order#</th>
                                                    <th>Tên Món</th>
                                                    <th>Trạng Thái</th>
                                                    <th>Giá</th>
                                                    <th>Ngày </th>
                                                    <th>Chi Tiết</th>
                                                    <th>Hành Động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-3" type="checkbox"
                                                                    value="" aria-label="...">
                                                            </div>
                                                            <div class="ms-2">
                                                                <h6 class="mb-0 font-14">CAFE-1211223</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Cà Phê Dừa</td>
                                                    <td>
                                                        <div
                                                            class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3">
                                                            <i class="bx bxs-circle me-1"></i>Đã hoàn thành
                                                        </div>
                                                    </td>
                                                    <td>$45,000vnd</td>
                                                    <td>12 Tháng 12, 2023</td>
                                                    <td><button type="button"
                                                            class="btn btn-primary btn-sm radius-30 px-4">View
                                                            Details</button></td>
                                                    <td>
                                                        <div class="d-flex order-actions">
                                                            <a href="javascript:;" class=""><i
                                                                    class="bx bxs-edit"></i></a>
                                                            <a href="javascript:;" class="ms-3"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-3" type="checkbox"
                                                                    value="" aria-label="...">
                                                            </div>
                                                            <div class="ms-2">
                                                                <h6 class="mb-0 font-14">CAFE-1211224</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Cà Phê Đen</td>
                                                    <td>
                                                        <div
                                                            class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3">
                                                            <i class="bx bxs-circle align-middle me-1"></i>Đã xác nhận
                                                        </div>
                                                    </td>
                                                    <td>25,000vnd</td>
                                                    <td>12 Tháng 12, 2023</td>
                                                    <td><button type="button"
                                                            class="btn btn-primary btn-sm radius-30 px-4">View
                                                            Details</button></td>
                                                    <td>
                                                        <div class="d-flex order-actions">
                                                            <a href="javascript:;" class=""><i
                                                                    class="bx bxs-edit"></i></a>
                                                            <a href="javascript:;" class="ms-3"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-3" type="checkbox"
                                                                    value="" aria-label="...">
                                                            </div>
                                                            <div class="ms-2">
                                                                <h6 class="mb-0 font-14">CAFE-1211225</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Cappuccino</td>
                                                    <td>
                                                        <div
                                                            class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3">
                                                            <i class="bx bxs-circle align-middle me-1"></i>Đang Làm
                                                        </div>
                                                    </td>
                                                    <td>$35,000vnd</td>
                                                    <td>12 Tháng 12, 2023</td>
                                                    <td><button type="button"
                                                            class="btn btn-primary btn-sm radius-30 px-4">View
                                                            Details</button></td>
                                                    <td>
                                                        <div class="d-flex order-actions">
                                                            <a href="javascript:;" class=""><i
                                                                    class="bx bxs-edit"></i></a>
                                                            <a href="javascript:;" class="ms-3"><i
                                                                    class="bx bxs-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row">

                                <b>THÀNH TIỀN: 105,000 VNĐ</b>
                                <div class="col-10">
                                </div>
                            </div>
                            <div class="col-2 text-end">
                                <button class="btn btn-secondary">XÁC NHẬN</button>

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
    <script src="../assets/admin/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="../assets/admin/js/jquery.min.js"></script>
    <script src="../assets/admin/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="../assets/admin/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="../assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="../assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/admin/plugins/chartjs/js/Chart.min.js"></script>
    <script src="../assets/admin/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="../assets/admin/js/index.js"></script>
    <!--app JS-->
    <script src="../assets/admin/js/app.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const x = localStorage.getItem("login")
            if (!x) {
                return window.location.href = "/pagesAdmin/login"
            }
        });

        function logout() {
            localStorage.removeItem('login')
            return window.location.href = "/pagesAdmin/login"
        }
    </script>
</body>

</html>
