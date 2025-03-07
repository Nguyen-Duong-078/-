@extends('layouts.master')

@section('title')
    Trang Chủ | Trường THPT Như Thanh 2
@endsection

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">
            <!-- Congratulations card -->
            <div class="col-xl-8 col-lg-7 align-self-end mt-md-5 mt-lg-4 pt-md-2 pt-lg-0">
                <div class="card">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card-body">
                                <h4 class="card-title mb-4 text-truncate">Xin Chào Admin 🎉
                                </h4>
                                <p class="mb-0">Chào mừng đến với <strong>Trang Quản trị </strong> <br>
                                    <strong>Trường Trung học Như Thanh 2</strong> <Br>
                                    Hệ Thống quản trị viên, giáo viên, và học sinh thuận lợi
                                    trong quá trình quản lý thông tin và học tập.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 position-relative text-center">
                            <img src="Assets/Admin/img/illustrations/illustration-john-2.png"
                                class="card-img-position bottom-0 w-auto end-0 scaleX-n1-rtl" alt="View Profile">
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Congratulations card -->
            <!-- Cards with icon profit and loss info -->
            <div class="col-xl-4 col-lg-5">
                <div class="row gy-4">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="avatar">
                                    <div class="avatar-initial bg-info rounded-circle shadow">
                                        <i class="mdi mdi-trending-up mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="transactionsID" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionsID">
                                        <a class="dropdown-item" href="javascript:void(0);">Làm mới</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Chia sẻ</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Cập nhật</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <h6 class="mb-2">Giao dịch</h6>
                                <div class="d-flex flex-wrap mb-2 gap-2 pb-1 align-items-center">
                                    <h4 class="mb-0">1.2k</h4>
                                    <small class="text-success mt-1">+38%</small>
                                </div>
                                <small>Chi tiết giao dịch</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="avatar">
                                    <div class="avatar-initial bg-success rounded-circle shadow">
                                        <i class="mdi mdi-currency-usd mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="revenueID" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="revenueID">
                                        <a class="dropdown-item" href="javascript:void(0);">Làm mới</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Chia sẻ</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Cập nhật</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <h6 class="mb-2">Doanh thu</h6>
                                <div class="d-flex flex-wrap mb-2 pb-1 align-items-center gap-2">
                                    <h4 class="mb-0">$95.2k</h4>
                                    <small class="text-success mt-1">+12%</small>
                                </div>
                                <small>Tăng doanh thu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Cards with icon profit and loss info -->
            <!-- Total Profit Chart & Tháng trước balance -->
            <div class="col-xl-8">
                <div class="card">
                    <div class="row">
                        <div class="col-md-7 pe-md-0">
                            <div class="card-header">
                                <h5 class="mb-0">Tổng lợi nhuận</h5>
                            </div>
                            <div class="card-body">
                                <div id="totalProfitChart"></div>
                            </div>
                        </div>
                        <div class="col-md-5 border-start ps-md-0">
                            <hr class="d-block d-md-none my-0">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-1">$482.85k</h5>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="totalProfit" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfit">
                                            <a class="dropdown-item" href="javascript:void(0);">28 Ngày Qua</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Tháng Trước</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Năm Trước</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-body mb-0">Số dư tháng trước $234.40k</p>
                            </div>
                            <div class="card-body pt-3">
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-success rounded">
                                            <i class="mdi mdi-trending-up mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3 d-flex flex-column">
                                        <h6 class="mb-1">$48,568.20</h6>
                                        <small>Tổng lợi nhuận</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-primary rounded">
                                            <i class="mdi mdi-account-outline mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3 d-flex flex-column">
                                        <h6 class="mb-1">$38,453.25</h6>
                                        <small>Tổng thu nhập</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-secondary rounded">
                                            <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3 d-flex flex-column">
                                        <h6 class="mb-1">$2,453.45</h6>
                                        <small>Tổng chi phí</small>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="button">Xem báo cáo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Total Profit Chart & Tháng trước balance -->
            <!-- three chart -->
            <div class="col-xl-4">
                <div class="row gy-4">
                    <!-- Total Sales -->
                    <div class="col-xl-12 col-md-6">
                        <div class="card">
                            <div
                                class="card-body d-flex justify-content-between align-items-center flex-xl-nowrap flex-wrap">
                                <div class="me-3">
                                    <h5 class="mb-4">Tổng doanh thu</h5>
                                    <div class="small mb-1">Tính trong 7 ngày qua</div>
                                    <div class="d-flex align-items-center gap-2">
                                        <h4 class="mb-0">$25,980</h4>
                                        <small class="text-success lh-sm">+15.6%</small>
                                    </div>
                                </div>
                                <div id="totalSalesDonutChart" class="mt-3 mt-md-0"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Total Sales -->
                    <!-- Total Revenue chart -->
                    <div class="col-xl-6 col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="mb-0">$35.4k</h4>
                            </div>
                            <div class="card-body">
                                <div id="totalRevenueChart" class="mb-3"></div>
                                <h6 class="text-center mb-0">Tổng doanh thu</h6>
                            </div>
                        </div>
                    </div>
                    <!--/ Total Revenue chart -->
                    <!-- Total Sales chart -->
                    <div class="col-xl-6 col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="mb-0">135k</h4>
                            </div>
                            <div class="card-body">
                                <div id="totalSalesSemiDonutChart" class="mb-4"></div>
                                <h6 class="text-center mb-0">Tổng doanh thu</h6>
                            </div>
                        </div>
                    </div>
                    <!--/ Total Sales chart -->
                </div>
            </div>
            <!--/ three chart -->
            <!-- Transactions -->
            <div class="col-xl-4 col-md-6 ">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Giao dịch</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">28 Ngày Qua</a>
                                <a class="dropdown-item" href="javascript:void(0);">Tháng Trước</a>
                                <a class="dropdown-item" href="javascript:void(0);">Năm Trước</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-2">
                                <div class="me-2 pe-1">
                                    <div class="avatar flex-shrink-0">
                                        <div class="avatar-initial bg-label-danger rounded">
                                            <div>
                                                <img src="https://demos.themeselection.com/materio-aspnet-core-mvc-admin-template/assets/img/icons/unicons/paypal.svg"
                                                    alt="paypal" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Paypal</h6>
                                        <small>Tiền đã nhận</small>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-3">
                                        <h6 class="mb-0">+$24,820</h6>
                                        <i class='mdi mdi-chevron-up mdi-24px text-success'></i>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-2">
                                <div class="me-2 pe-1">
                                    <div class="avatar flex-shrink-0">
                                        <div class="avatar-initial bg-label-success rounded">
                                            <div>
                                                <img src="https://demos.themeselection.com/materio-aspnet-core-mvc-admin-template/assets/img/icons/unicons/credit-card.svg"
                                                    alt="paypal" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Credit Card</h6>
                                        <small>Digital Ocean</small>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-3">
                                        <h6 class="mb-0">-$1,250</h6>
                                        <i class='mdi mdi-chevron-down mdi-24px text-danger'></i>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-2">
                                <div class="me-2 pe-1">
                                    <div class="avatar flex-shrink-0">
                                        <div class="avatar-initial bg-label-warning rounded">
                                            <div>
                                                <img src="https://demos.themeselection.com/materio-aspnet-core-mvc-admin-template/assets/img/icons/unicons/card-atm.svg"
                                                    alt="paypal" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Mastercard</h6>
                                        <small>Netflix</small>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-3">
                                        <h6 class="mb-0">-$99</h6>
                                        <i class='mdi mdi-chevron-down mdi-24px text-danger'></i>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-2">
                                <div class="me-2 pe-1">
                                    <div class="avatar flex-shrink-0">
                                        <div class="avatar-initial bg-label-primary rounded">
                                            <div>
                                                <img src="https://demos.themeselection.com/materio-aspnet-core-mvc-admin-template/assets/img/icons/unicons/wallet.svg"
                                                    alt="paypal" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Wallet</h6>
                                        <small>Mac'D</small>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-3">
                                        <h6 class="mb-0">-$82</h6>
                                        <i class='mdi mdi-chevron-down mdi-24px text-danger'></i>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-2 pe-1">
                                    <div class="avatar flex-shrink-0">
                                        <div class="avatar-initial bg-label-info rounded">
                                            <div>
                                                <img src="https://demos.themeselection.com/materio-aspnet-core-mvc-admin-template/assets/img/icons/unicons/arrow-growth.svg"
                                                    alt="paypal" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Trasnfer</h6>
                                        <small>Refund</small>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-3">
                                        <h6 class="mb-0">+$8,934</h6>
                                        <i class='mdi mdi-chevron-up mdi-24px text-success'></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->
            <!-- New visitors cards -->
            <div class="col-xl-4 col-md-6 ">
                <div class="row gy-4">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="avatar">
                                    <div class="avatar-initial bg-danger rounded-circle shadow">
                                        <i class="mdi mdi-star-outline mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="logisticsID" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="logisticsID">
                                        <a class="dropdown-item" href="javascript:void(0);">Làm mới</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Chia sẻ</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Cập nhật</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <h6 class="text-body mb-2">Logistics</h6>
                                <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                                    <h4 class="mb-0 me-2">44.10k</h4>
                                    <small class="text-success">+42%</small>
                                </div>
                                <small>Hậu cần khu vực</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="avatar">
                                    <div class="avatar-initial bg-warning rounded-circle shadow">
                                        <i class="mdi mdi-check mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="reportsID" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="reportsID">
                                        <a class="dropdown-item" href="javascript:void(0);">Làm mới</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Chia sẻ</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Cập nhật</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <h6 class="text-body mb-2">Báo cáo</h6>
                                <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                                    <h4 class="mb-0 me-2">268</h4>
                                    <small class="text-danger">-28%</small>
                                </div>
                                <small>Lỗi hệ thống</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5 class="card-title m-0 me-2">Khách mới</h5>
                            </div>
                            <div class="card-body pt-0 pb-3">
                                <div class="row align-items-center">
                                    <div class="col-sm-6 pe-xxl-5">
                                        <p class="small pe-xxl-5">48% khách truy cập mới trong tuần này.</p>
                                        <div class="d-flex flex-wrap">
                                            <h4 class="mb-0 me-1">12,480</h4>
                                            <h6 class="text-success mb-0">
                                                <i class="mdi mdi-chevron-up mdi-24px"></i>
                                                <span>28</span>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="newVisitorsChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ New visitors cards -->
            <!-- Website Statistics -->
            <div class="col-xl-4 col-md-6 ">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Thống kê trang web</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="webStatistics" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="webStatistics">
                                <a class="dropdown-item" href="javascript:void(0);">28 ngày qua</a>
                                <a class="dropdown-item" href="javascript:void(0);">Tháng trước</a>
                                <a class="dropdown-item" href="javascript:void(0);">Năm trước</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-end mb-3">
                            <div class="mb-2">
                                <h5 class="display-3 mb-0">4,590</h5>
                                <small>Tổng lưu lượng truy cập</small>
                            </div>
                            <div id="webVisitors"></div>
                        </div>
                        <div class="d-flex align-items-center border-top py-3">
                            <span class="text-success me-2">
                                <i class="mdi mdi-circle"></i>
                            </span>
                            <h6 class="fw-normal mb-0">Trực tiếp</h6>
                            <div class="flex-grow-1"></div>
                            <h6 class="text-end me-4 mb-0">86,471</h6>
                            <h6 class="text-end me-2 mb-0">15%</h6>
                            <i class="mdi mdi-chevron-down text-danger mdi-24px"></i>
                        </div>
                        <div class="d-flex align-items-center border-top py-3">
                            <span class="text-primary me-2">
                                <i class="mdi mdi-circle"></i>
                            </span>
                            <h6 class="fw-normal mb-0">Tìm kiếm hữu cơ</h6>
                            <div class="flex-grow-1"></div>
                            <h6 class="text-end me-4 mb-0">57,484</h6>
                            <h6 class="text-end me-2 mb-0">85%</h6>
                            <i class="mdi mdi-chevron-up text-success mdi-24px"></i>
                        </div>
                        <div class="d-flex align-items-center border-top py-3">
                            <span class="text-warning me-2">
                                <i class="mdi mdi-circle"></i>
                            </span>
                            <h6 class="fw-normal mb-0">Giới thiệu</h6>
                            <div class="flex-grow-1"></div>
                            <h6 class="text-end me-4 mb-0">2,534</h6>
                            <h6 class="text-end me-2 mb-0">48%</h6>
                            <i class="mdi mdi-chevron-up text-success mdi-24px"></i>
                        </div>
                        <div class="d-flex align-items-center border-top pt-3">
                            <span class="text-danger me-2">
                                <i class="mdi mdi-circle"></i>
                            </span>
                            <h6 class="fw-normal mb-0">Thư</h6>
                            <div class="flex-grow-1"></div>
                            <h6 class="text-end me-4 mb-0">977</h6>
                            <h6 class="text-end me-2 mb-0">36%</h6>
                            <i class="mdi mdi-chevron-down text-danger mdi-24px"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Website Statistics -->
            <!-- Card DataTable -->
            <div class="col-xl-8 order-xl-1 order-2">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-truncate"># ID</th>
                                    <th class="text-truncate"><span class="mdi mdi-arrow-up"></span>
                                    </th>
                                    <th class="text-truncate">Khách hàng</th>
                                    <th class="text-truncate">Tổng cộng</th>
                                    <th class="text-truncate">Sự cân bằng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-primary">#4910</td>
                                    <td>
                                        <div class="avatar avatar-sm">
                                            <div class="avatar-initial bg-label-success rounded-circle">
                                                <i class="mdi mdi-check mdi-18px"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="Assets/Admin/img/avatars/1.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0 text-truncate">Jordan Stevenson</h6>
                                                <small class="text-truncate">Layne_Kuvalis@gmail.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$3428</td>
                                    <td><span class="badge bg-label-success rounded-pill fw-normal">Trả</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">#4909</td>
                                    <td>
                                        <div class="avatar avatar-sm">
                                            <div class="avatar-initial bg-label-success rounded-circle">
                                                <i class="mdi mdi-check mdi-18px"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="Assets/Admin/img/avatars/2.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0 text-truncate">Richard Payne</h6>
                                                <small class="text-truncate">richard_payne@gmail.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$2872</td>
                                    <td class="text-heading">$883</td>
                                </tr>
                                <tr>
                                    <td class="text-primary">#4908</td>
                                    <td>
                                        <div class="avatar avatar-sm">
                                            <div class="avatar-initial bg-label-info rounded-circle">
                                                <i class="mdi mdi-arrow-down mdi-18px"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="Assets/Admin/img/avatars/3.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0 text-truncate">Jennifer Summers</h6>
                                                <small class="text-truncate">jennifer_summers@gmail.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$4077</td>
                                    <td><span class="badge bg-label-success rounded-pill fw-normal">Trả</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">#4907</td>
                                    <td>
                                        <div class="avatar avatar-sm">
                                            <div class="avatar-initial bg-label-secondary rounded-circle">
                                                <i class="mdi mdi-email-outline mdi-18px"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="Assets/Admin/img/avatars/4.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0 text-truncate">Mr. Justin Richardson
                                                </h6>
                                                <small class="text-truncate">justin_richardson@gmail.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$2060</td>
                                    <td class="text-heading">$361</td>
                                </tr>
                                <tr>
                                    <td class="text-primary">#4906</td>
                                    <td>
                                        <div class="avatar avatar-sm">
                                            <div class="avatar-initial bg-label-warning rounded-circle">
                                                <i class="mdi mdi-chart-pie-outline mdi-18px"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="Assets/Admin/img/avatars/5.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0 text-truncate">Nicholas Tanner</h6>
                                                <small class="text-truncate">nicholas_tanner@gmail.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$3128</td>
                                    <td><span class="badge bg-label-success rounded-pill fw-normal">Trả</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">#4905</td>
                                    <td>
                                        <div class="avatar avatar-sm">
                                            <div class="avatar-initial bg-label-secondary rounded-circle">
                                                <i class="mdi mdi-email-outline mdi-18px"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="Assets/Admin/img/avatars/6.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0 text-truncate">Crystal Mays</h6>
                                                <small class="text-truncate">crystal_mays@gmail.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$2032</td>
                                    <td><span class="badge bg-label-success rounded-pill fw-normal">Trả</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">#4904</td>
                                    <td>
                                        <div class="avatar avatar-sm">
                                            <div class="avatar-initial bg-label-success rounded-circle">
                                                <i class="mdi mdi-check mdi-18px"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="Assets/Admin/img/avatars/7.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0 text-truncate">Mary Garcia</h6>
                                                <small class="text-truncate">mary_garcia@gmail.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$2230</td>
                                    <td class="text-heading">-$253</td>
                                </tr>
                                <tr class="border-transparent">
                                    <td class="text-primary">#4903</td>
                                    <td>
                                        <div class="avatar avatar-sm">
                                            <div class="avatar-initial bg-label-info rounded-circle">
                                                <i class="mdi mdi-arrow-down mdi-18px"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="Assets/Admin/img/avatars/8.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                            <div>
                                                <h6 class="mb-0 text-truncate">Megan Roberts</h6>
                                                <small class="text-truncate">megan_roberts@gmail.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">$5612</td>
                                    <td><span class="badge bg-label-success rounded-pill fw-normal">Trả</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Card DataTable -->
            <!-- Meeting Schedule -->
            <div class="col-xl-4 col-md-6 order-xl-2 order-1">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Lịch họp</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="meetingSchedule" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="meetingSchedule">
                                <a class="dropdown-item" href="javascript:void(0);">28 ngày qua</a>
                                <a class="dropdown-item" href="javascript:void(0);">Tháng trước</a>
                                <a class="dropdown-item" href="javascript:void(0);">Năm trước</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-2">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="Assets/Admin/img/avatars/4.png" alt="avatar" class="rounded-circle">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Gọi với Woods</h6>
                                        <small>
                                            <i class="mdi mdi-calendar-blank-outline mdi-14px"></i>
                                            <span>21 tháng 7 | 08:20-10:30</span>
                                        </small>
                                    </div>
                                    <div class="badge bg-label-primary rounded-pill">Việc kinh doanh</div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-2">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="Assets/Admin/img/avatars/8.png" alt="avatar" class="rounded-circle">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Gọi với Hilda</h6>
                                        <small>
                                            <i class="mdi mdi-calendar-blank-outline mdi-14px"></i>
                                            <span>21 tháng 7 | 08:20-10:30</span>
                                        </small>
                                    </div>
                                    <div class="badge bg-label-success rounded-pill">Thiền</div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-2">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="Assets/Admin/img/avatars/5.png" alt="avatar" class="rounded-circle">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Cuộc gọi hội nghị</h6>
                                        <small>
                                            <i class="mdi mdi-calendar-blank-outline mdi-14px"></i>
                                            <span>21 tháng 7 | 08:20-10:30</span>
                                        </small>
                                    </div>
                                    <div class="badge bg-label-warning rounded-pill">Bữa tối</div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-2">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="Assets/Admin/img/avatars/3.png" alt="avatar" class="rounded-circle">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Gặp gỡ với Mark</h6>
                                        <small>
                                            <i class="mdi mdi-calendar-blank-outline mdi-14px"></i>
                                            <span>21 tháng 7 | 08:20-10:30</span>
                                        </small>
                                    </div>
                                    <div class="badge bg-label-secondary rounded-pill">Gặp</div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-2">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="Assets/Admin/img/avatars/2.png" alt="avatar" class="rounded-circle">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Meeting in Oakland</h6>
                                        <small>
                                            <i class="mdi mdi-calendar-blank-outline mdi-14px"></i>
                                            <span>21 tháng 7 | 08:20-10:30</span>
                                        </small>
                                    </div>
                                    <div class="badge bg-label-danger rounded-pill">Bữa tối</div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="Assets/Admin/img/avatars/1.png" alt="avatar" class="rounded-circle">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Gặp gỡ với Carl</h6>
                                        <small>
                                            <i class="mdi mdi-calendar-blank-outline mdi-14px"></i>
                                            <span>21 tháng 7 | 08:20-10:30</span>
                                        </small>
                                    </div>
                                    <div class="badge bg-label-primary rounded-pill">Việc kinh doanh</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Meeting Schedule -->
        </div>
    </div>
    <!-- / Content -->
@endsection
