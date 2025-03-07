@extends('layouts.master')

@section('title')
    Giáo Viên | Chi tiết giáo viên
@endsection

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-1">
            <span class="text-muted fw-light">Giáo Viên /</span><span> {{ $teacher['p_name'] }}</span>
        </h4>

        <div class="row">
            <div class="d-flex align-content-center justify-content-end flex-wrap gap-3 mb-3">
                <a href="/admin/teacher" class="btn btn-danger">Danh Sách Giáo Viên</a>
            </div>
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class=" d-flex align-items-center flex-column">
                                <img class="img-fluid rounded mb-3 mt-4" src="{{ $teacher['p_image'] }}" height="130"
                                    width="130" alt="User avatar" />
                                <div class="user-info text-center">
                                    <h4>{{ $teacher['p_name'] }}</h4>
                                    <span class="badge bg-label-danger rounded-pill">{{ $teacher['c_teaching'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap my-2 py-3">
                            <div class="d-flex align-items-center me-4 mt-3 gap-3">
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-primary rounded">
                                        <i class='mdi mdi-check mdi-24px'></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-0">1.23k</h4>
                                    <span>Hoàn Thành</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3 gap-3">
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-primary rounded">
                                        <i class='mdi mdi-star-outline mdi-24px'></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-0">568</h4>
                                    <span>Thực Hện</span>
                                </div>
                            </div>
                        </div>
                        <h5 class="pb-3 border-bottom mb-3">Chi Tiết</h5>
                        <div class="info-container">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3">
                                    <span class="h6">Username:</span>
                                    <span>{{ $teacher['p_username'] }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Email:</span>
                                    <span>{{ $teacher['p_email'] }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Trạng Thái:</span>
                                    <span class="badge bg-label-success rounded-pill">Active</span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Role:</span>
                                    <span>Author</span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Mã Số:</span>
                                    <span>{{ $teacher['p_id'] }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Contact:</span>
                                    <span>+84 {{ $teacher['p_phone'] }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Ngôn Ngữ:</span>
                                    <span>Việt Nam</span>
                                </li>
                                <li class="mb-3">
                                    <span class="h6">Quốc Gia:</span>
                                    <span>Việt Nam</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                    data-bs-toggle="modal">Chỉnh sửa</a>
                                <a href="javascript:;" class="btn btn-outline-danger suspend-user">Khóa tài khoản</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /User Card -->
                <!-- Plan Card -->
                <div class="card mb-4 border-2 border-primary">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <span class="badge bg-label-primary rounded-pill">Tiêu chuẩn</span>
                            <div class="d-flex justify-content-center">
                                <sub class="h5 pricing-currency mt-auto mb-2  text-primary">$</sub>
                                <h1 class="display-3 mb-0 text-primary">99</h1>
                                <sub class="h6 pricing-duration mt-auto mb-2 fw-normal">Tháng</sub>
                            </div>
                        </div>
                        <ul class="list-unstyled g-2 my-4 ms-n2">
                            <li class="mb-2 d-flex align-items-center "><i
                                    class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span>10 người dùng</span></li>
                            <li class="mb-2 d-flex align-items-center "><i
                                    class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span>Dung lượng lưu trữ lên tới
                                    10 GB</span>
                            </li>
                            <li class="mb-2 d-flex align-items-center "><i
                                    class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span>Hỗ trợ cơ bản</span></li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="h6 mb-0">Ngày</span>
                            <span class="h6 mb-0">65%</span>
                        </div>
                        <div class="progress mb-1 rounded" style="height: 6px;">
                            <div class="progress-bar rounded" role="progressbar" style="width: 65%;" aria-valuenow="65"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span>còn 4 ngày</span>
                        <div class="d-grid w-100 mt-4">
                            <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Kế
                                hoạch nâng cấp</button>
                        </div>
                    </div>
                </div>
                <!-- /Plan Card -->
            </div>
            <!--/ User Sidebar -->


            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <!-- User Tabs -->
                <ul class="nav nav-pills flex-column flex-md-row flex-wrap mb-4">
                    <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                                class="mdi mdi-account-outline mdi-20px me-1"></i>Tài khoản</a></li>
                    <li class="nav-item"><a class="nav-link" href="app-user-view-security.html"><i
                                class="mdi mdi-lock-open-outline mdi-20px me-1"></i>Bảo vệ</a></li>
                    <li class="nav-item"><a class="nav-link" href="app-user-view-billing.html"><i
                                class="mdi mdi-bookmark-outline mdi-20px me-1"></i>Thanh toán & Gói</a></li>
                    <li class="nav-item"><a class="nav-link" href="app-user-view-notifications.html"><i
                                class="mdi mdi-bell-outline mdi-20px me-1"></i>Thông báo</a></li>
                </ul>
                <!--/ User Tabs -->

                <!-- Project table -->
                <div class="card mb-4">
                    <h5 class="card-header">Danh sách dự án của người dùng</h5>
                    <div class="card-datatable table-responsive">
                        <table class="table datatable-project">
                            <thead class="table-light">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>DỰ ÁN</th>
                                    <th class="text-nowrap">Tổng số nhiệm vụ</th>
                                    <th>Tiến triển</th>
                                    <th>Giờ</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- /Project table -->

                <!-- Activity Timeline -->
                <div class="card mb-4">
                    <h5 class="card-header">Dòng thời gian hoạt động của người dùng</h5>
                    <div class="card-body pb-0 pt-3">
                        <ul class="timeline mb-0">
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-danger"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">12 hóa đơn đã được thanh toán</h6>
                                        <span class="text-muted">12 phút trước</span>
                                    </div>
                                    <p class="text-muted mb-2">Hóa đơn đã được thanh toán cho công ty</p>
                                    <div class="d-flex">
                                        <a href="javascript:void(0)" class="me-3">
                                            <img src="/../../../../Assets/Admin/img/icons/misc/pdf.png" alt="PDF image"
                                                width="15" class="me-2">
                                            <span class="fw-medium text-heading">hóa đơn.pdf</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-primary"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">Cuộc họp khách hàng</h6>
                                        <span class="text-muted">45 phút trước</span>
                                    </div>
                                    <p class="text-muted mb-2">Cuộc họp dự án với {{ $teacher['p_name'] }} 10:15 sáng</p>
                                    <div class="d-flex flex-wrap">
                                        <div class="avatar me-3">
                                            <img src="/Assets/Admin/img/avatars/3.png" alt="Avatar"
                                                class="rounded-circle" />
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Nguyễn Văn Dương</h6>
                                            <span class="text-muted">Giám đốc điều hành của ThemeSelection</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-warning"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">Tạo một dự án mới cho khách hàng</h6>
                                        <span class="text-muted">2 ngày trước</span>
                                    </div>
                                    <p class="text-muted mb-2">5 thành viên nhóm trong một dự án</p>
                                    <div class="d-flex align-items-center avatar-group">
                                        <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                            data-bs-placement="top" title="Vinnie Mostowy">
                                            <img src="/Assets/Admin/img/avatars/5.png" alt="Avatar"
                                                class="rounded-circle">
                                        </div>
                                        <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                            data-bs-placement="top" title="Marrie Patty">
                                            <img src="/Assets/Admin/img/avatars/12.png" alt="Avatar"
                                                class="rounded-circle">
                                        </div>
                                        <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                            data-bs-placement="top" title="Jimmy Jackson">
                                            <img src="/Assets/Admin/img/avatars/9.png" alt="Avatar"
                                                class="rounded-circle">
                                        </div>
                                        <div class="avatar">
                                            <span class="avatar-initial rounded-circle pull-up bg-lighter text-body"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="3 more">+3</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent border-transparent">
                                <span class="timeline-point timeline-point-info"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">Đánh giá thiết kế</h6>
                                        <span class="text-muted">5 ngày trước</span>
                                    </div>
                                    <p class="text-muted mb-0">Đánh giá hàng tuần về thiết kế mới được chuẩn bị cho ứng
                                        dụng mới của chúng tôi.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Activity Timeline -->

                <!-- Invoice table -->
                <div class="card mb-4">
                    <div class="card-datatable table-responsive">
                        <table class="table datatable-invoice">
                            <thead class="table-light">
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th><i class='mdi mdi-trending-up'></i></th>
                                    <th>Total</th>
                                    <th>Issued Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- /Invoice table -->
            </div>
            <!--/ User Content -->
        </div>

        <!-- Modal -->
        <!-- Edit User Modal -->
        <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body py-3 py-md-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Edit User Information</h3>
                            <p class="pt-1">Updating user details will receive a privacy audit.</p>
                        </div>
                        <form id="editUserForm" class="row g-4" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                        class="form-control" placeholder="John" />
                                    <label for="modalEditUserFirstName">First Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                                        class="form-control" placeholder="Doe" />
                                    <label for="modalEditUserLastName">Last Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="modalEditUserName" name="modalEditUserName"
                                        class="form-control" placeholder="john.doe.007" />
                                    <label for="modalEditUserName">Username</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="modalEditUserEmail" name="modalEditUserEmail"
                                        class="form-control" placeholder="example@domain.com" />
                                    <label for="modalEditUserEmail">Email</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select"
                                        aria-label="Default select example">
                                        <option selected>Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                        <option value="3">Suspended</option>
                                    </select>
                                    <label for="modalEditUserStatus">Status</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                                        class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
                                    <label for="modalEditTaxID">Tax ID</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">US (+1)</span>
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                            class="form-control phone-number-mask" placeholder="202 555 0111" />
                                        <label for="modalEditUserPhone">Phone Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select id="modalEditUserLanguage" name="modalEditUserLanguage"
                                        class="select2 form-select" multiple>
                                        <option value="">Select</option>
                                        <option value="english" selected>English</option>
                                        <option value="spanish">Spanish</option>
                                        <option value="french">French</option>
                                        <option value="german">German</option>
                                        <option value="dutch">Dutch</option>
                                        <option value="hebrew">Hebrew</option>
                                        <option value="sanskrit">Sanskrit</option>
                                        <option value="hindi">Hindi</option>
                                    </select>
                                    <label for="modalEditUserLanguage">Language</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <select id="modalEditUserCountry" name="modalEditUserCountry"
                                        class="select2 form-select" data-allow-clear="true">
                                        <option value="">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select>
                                    <label for="modalEditUserCountry">Country</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="switch">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Use as a billing address?</span>
                                </label>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Edit User Modal -->

        <!-- Add New Credit Card Modal -->
        <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body pt-md-0 px-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2 pb-1">Upgrade Plan</h3>
                            <p>Choose the best plan for user.</p>
                        </div>
                        <form id="upgradePlanForm" class="row g-3 d-flex align-items-center" onsubmit="return false">
                            <div class="col-sm-9">
                                <div class="form-floating form-floating-outline">
                                    <select id="choosePlan" name="choosePlan" class="form-select"
                                        aria-label="Choose Plan">
                                        <option selected>Choose Plan</option>
                                        <option value="standard">Standard - $99/month</option>
                                        <option value="exclusive">Exclusive - $249/month</option>
                                        <option value="Enterprise">Enterprise - $499/month</option>
                                    </select>
                                    <label for="choosePlan">Choose Plan</label>
                                </div>
                            </div>
                            <div class="col-sm-3 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary">Upgrade</button>
                            </div>
                        </form>
                    </div>
                    <hr class="mx-md-n5 mx-n3">
                    <div class="modal-body pb-md-0 px-0">
                        <p class="mb-0">User current plan is standard plan</p>
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="d-flex justify-content-center me-2 mt-3">
                                <sup class="h5 pricing-currency pt-1 mt-2 mb-0 me-1 text-primary">$</sup>
                                <h1 class="display-3 mb-0 text-primary">99</h1>
                                <sub class="h6 pricing-duration mt-auto mb-2 pb-1 text-body">/month</sub>
                            </div>
                            <button class="btn btn-outline-danger cancel-subscription mt-3">Cancel Subscription</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Add New Credit Card Modal -->

        <!-- /Modal -->
    </div>
    <!-- / Content -->
@endsection
