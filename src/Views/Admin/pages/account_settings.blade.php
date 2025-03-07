@extends('layouts.master')

@section('title')
    Cài Đặt Tài Khoản | {{ $account['name'] }}
@endsection

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Cài đặt tài khoản /</span>
            Tài khoản
        </h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-4 gap-2 gap-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i
                                class="mdi mdi-account-outline mdi-20px me-1"></i> Tài khoản</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-account-settings-security.html"><i
                                class="mdi mdi-lock-open-outline mdi-20px me-1"></i>Bảo vệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-account-settings-billing.html"><i
                                class="mdi mdi-bookmark-outline mdi-20px me-1"></i>Thanh toán & Gói</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-account-settings-notifications.html"><i
                                class="mdi mdi-bell-outline mdi-20px me-1"></i>Thông báo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-account-settings-connections.html"><i
                                class="mdi mdi-link mdi-20px me-1"></i>Kết nối</a>
                    </li>
                </ul>
                <div class="card mb-4">
                    <h4 class="card-header">Chi tiết hồ sơ</h4>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ $account['avatar'] }}" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded"
                                id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                                    <span class="d-none d-sm-block">Tải ảnh mới lên</span>
                                    <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                                    <input type="file" id="upload" class="account-file-input" hidden
                                        accept="image/png, image/jpeg" />
                                </label>
                                <button type="button" class="btn btn-outline-danger account-image-reset mb-3">
                                    <i class="mdi mdi-reload d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cài lại</span>
                                </button>

                                <div class="text-muted small">
                                    Được phép JPG, GIF hoặc PNG. Kích thước tối đa 800K
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-2 mt-1">
                        <form id="formAccountSettings" method="GET" onsubmit="return false">
                            <div class="row mt-2 gy-4">
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" id="fullname" name="firstName"
                                            value="{{ $account['name'] }}" autofocus />
                                        <label for="firstName">Họ và tên</label>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" name="lastName" id="lastName"
                                            value="Doe" />
                                        <label for="lastName">Last Name</label>
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" id="email" name="email"
                                            value="{{ $account['email'] }}" />
                                        <label for="email">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" class="form-control" id="organization" name="organization"
                                            value="Như Thanh II" />
                                        <label for="organization">Tổ chức</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                                value="{{ $account['phone'] }}" />
                                            <label for="phoneNumber">Số điện thoại</label>
                                        </div>
                                        <span class="input-group-text">VN (+84)</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" class="form-control" id="address" name="address"
                                            value="{{ $account['address'] }}" />
                                        <label for="address">Địa chỉ</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" id="state" name="state"
                                            placeholder="California" />
                                        <label for="state">State</label>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" class="form-control" id="zipCode" name="zipCode"
                                            placeholder="10000" maxlength="6" />
                                        <label for="zipCode">Zip Code</label>
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select id="country" class="select2 form-select">
                                            <option value="">Việt Nam</option>
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
                                            <option value="Korea">
                                                Korea, Republic of
                                            </option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Russia">
                                                Russian Federation
                                            </option>
                                            <option value="South Africa">
                                                South Africa
                                            </option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">
                                                United Arab Emirates
                                            </option>
                                            <option value="United Kingdom">
                                                United Kingdom
                                            </option>
                                            <option value="United States">
                                                United States
                                            </option>
                                        </select>
                                        <label for="country">Quốc gia</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select id="language" class="select2 form-select">
                                            <option value="">Chọn ngôn ngữ</option>
                                            <option value="en">English</option>
                                            <option value="fr">French</option>
                                            <option value="de">German</option>
                                            <option value="pt">Portuguese</option>
                                        </select>
                                        <label for="language">Ngôn ngữ</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select id="timeZones" class="select2 form-select">
                                            <option value="">Chọn múi giờ</option>
                                            <option value="-12">
                                                (GMT-12:00) International Date Line West
                                            </option>
                                            <option value="-11">
                                                (GMT-11:00) Midway Island, Samoa
                                            </option>
                                            <option value="-10">(GMT-10:00) Hawaii</option>
                                            <option value="-9">(GMT-09:00) Alaska</option>
                                            <option value="-8">
                                                (GMT-08:00) Pacific Time (US & Canada)
                                            </option>
                                            <option value="-8">
                                                (GMT-08:00) Tijuana, Baja California
                                            </option>
                                            <option value="-7">(GMT-07:00) Arizona</option>
                                            <option value="-7">
                                                (GMT-07:00) Chihuahua, La Paz, Mazatlan
                                            </option>
                                            <option value="-7">
                                                (GMT-07:00) Mountain Time (US & Canada)
                                            </option>
                                            <option value="-6">
                                                (GMT-06:00) Central America
                                            </option>
                                            <option value="-6">
                                                (GMT-06:00) Central Time (US & Canada)
                                            </option>
                                            <option value="-6">
                                                (GMT-06:00) Guadalajara, Mexico City,
                                                Monterrey
                                            </option>
                                            <option value="-6">
                                                (GMT-06:00) Saskatchewan
                                            </option>
                                            <option value="-5">
                                                (GMT-05:00) Bogota, Lima, Quito, Rio Branco
                                            </option>
                                            <option value="-5">
                                                (GMT-05:00) Eastern Time (US & Canada)
                                            </option>
                                            <option value="-5">
                                                (GMT-05:00) Indiana (East)
                                            </option>
                                            <option value="-4">
                                                (GMT-04:00) Atlantic Time (Canada)
                                            </option>
                                            <option value="-4">
                                                (GMT-04:00) Caracas, La Paz
                                            </option>
                                        </select>
                                        <label for="timeZones">Múi giờ</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <select id="currency" class="select2 form-select">
                                            <option value="">Chọn tiền tệ</option>
                                            <option value="usd">USD</option>
                                            <option value="euro">Euro</option>
                                            <option value="pound">Pound</option>
                                            <option value="bitcoin">Bitcoin</option>
                                        </select>
                                        <label for="currency">Tiền tệ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-2">
                                    Lưu thay đổi
                                </button>
                                <button type="reset" class="btn btn-outline-secondary">
                                    Cài lại
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
                <div class="card">
                    <h5 class="card-header fw-normal">Delete Account</h5>
                    <div class="card-body">
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h6 class="alert-heading mb-1">
                                    Bạn có chắc rằng bạn muốn xóa tài khoản của bạn?
                                </h6>
                                <p class="mb-0">
                                    Một khi bạn xóa tài khoản của mình, bạn sẽ không thể quay lại. Xin hãy chắc chắn.
                                </p>
                            </div>
                        </div>
                        <form id="formAccountDeactivation" onsubmit="return false">
                            <div class="form-check mb-3 ms-3">
                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                    id="accountActivation" />
                                <label class="form-check-label" for="accountActivation">Tôi xác nhận xóa tài khoản của
                                    mình
                                </label>
                            </div>
                            <button type="submit" class="btn btn-secondary deactivate-account" disabled="disabled">
                                Vô hiệu hóa tài khoản
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
