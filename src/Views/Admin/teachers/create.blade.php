@extends('layouts.master')

@section('title')
    Giáo Viên | Thêm Giáo Viên
@endsection

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Giáo Viên /</span><span> Thêm Mới Giáo Viên</span>
        </h4>

        <!-- Add Product -->
        <div class="app-ecommerce">
            <form action="/admin/teacher/create" class="needs-validation" method="post" enctype="multipart/form-data"
                novalidate>
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">Thêm Mới Giáo Viên</h4>
                        <p>Giáo Viên Như Thanh 2</p>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <button type="reset" class="btn btn-outline-secondary">Nhập Lại</button>
                        <button class="btn btn-outline-primary">
                            <a href="/admin/teacher">Danh sách giáo viên</a>
                        </button>

                        <button type="submit" class="btn btn-primary">
                            Xác Nhận
                        </button>
                    </div>
                </div>

                <div class="row">
                    <!-- First column-->
                    <div class="col-12 col-lg-12">
                        <!-- Product Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-tile mb-0">Thông Tin Giáo Viên</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="select2Basic" name="teacher"
                                                class="select2 form-select form-select-lg" data-allow-clear="true">
                                                @foreach ($teachings as $teaching)
                                                    <option class="form-control" value="{{ $teaching['id'] }}">
                                                        {{ $teaching['teaching'] }}</option>
                                                @endforeach
                                            </select>
                                            <label for="select2Basic">Teacher</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <input type="text" class="form-control" id="bs-validation-name"
                                                name="fullname" placeholder="Tên giáo viên" required />
                                            <label for="bs-validation-name">Tên giáo viên</label>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập tên của bạn
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <input type="text" class="form-control" id="bs-validation-address"
                                                name="address" placeholder="Quê quán" required />
                                            <label for="bs-validation-address">Quê quán</label>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập quê quán
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <input type="text" class="form-control" id="bs-validation-phone"
                                                name="phone" placeholder="+84 876.55.2004" required />
                                            <label for="bs-validation-phone">Số điện thoại</label>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập số điện thoại
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <input type="email" id="bs-validation-email" class="form-control"
                                                name="email" placeholder="nhuthanh@fpt.edu.vn" aria-label="email"
                                                required />
                                            <label for="bs-validation-email">Email</label>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập Email hợp lệ
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <input type="text" class="form-control" id="bs-validation-Username"
                                                name="name" placeholder="Admin" required />
                                            <label for="bs-validation-Username">Username</label>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập số Username
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-password-toggle">
                                            <div class="input-group input-group-merge">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="password" id="bs-validation-password" name="password"
                                                        class="form-control"
                                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                        required />
                                                    <label for="bs-validation-password">Password</label>
                                                </div>
                                                <span class="input-group-text rounded-end cursor-pointer"
                                                    id="basic-default-password4"><i
                                                        class="mdi mdi-eye-off-outline"></i></span>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">
                                                    Vui lòng nhập password
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- /Product Information -->
                        <!-- Media -->
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 card-title">Avatar</h5>
                                <a href="javascript:void(0);" class="fw-medium">Add avatar from URL</a>
                            </div>
                            <style>
                                #image-preview img {
                                    max-width: 100%;
                                    border-radius: 8px;
                                    box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
                                }
                            </style>
                            <div class="card-body">
                                <div class="dz-message needsclick my-5" id="custom-button">
                                    Kéo và thả hình ảnh của bạn vào đây
                                    <small class="text-muted d-block fs-6 my-2">or</small>
                                    <label class="needsclick btn btn-outline-primary d-inline" for="image-input">Browse
                                        image</label>
                                </div>
                                <input type="file" id="image-input" name="image" accept="image/*"
                                    onchange="previewImage()" required style="display: none" />
                                <div id="image-preview"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="switch switch-primary">
                                <input type="checkbox" class="switch-input" required />
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                </span>
                                <span class="switch-label">Gửi cho Tôi Email liên quan</span>
                            </label>
                        </div>

                        <!-- /Media -->
                    </div>
                </div>
            </form>
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-tile mb-0">Nhập Thông Tin Từ Excel</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <form action="/admin/teacher/import" method="post" enctype="multipart/form-data">
                                <div class="form-floating form-floating-outline d-flex align-items-center ">
                                    <input class="input" name="excel" type="file">
                                    <style>
                                        .button {
                                            line-height: 1;
                                            text-decoration: none;
                                            display: inline-flex;
                                            align-items: center;
                                            gap: .75rem;
                                            background-color: var(--clr);
                                            color: #fff;
                                            border-radius: 10rem;
                                            font-weight: 600;
                                            padding: .50rem 1.5rem;
                                            padding-left: 20px;
                                            white-space: nowrap;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            transition: background-color .3s;
                                        }

                                        .button__icon-wrapper {
                                            flex-shrink: 0;
                                            width: 25px;
                                            height: 25px;
                                            position: relative;
                                            color: var(--clr);
                                            background-color: #fff;
                                            border-radius: 50%;
                                            display: grid;
                                            place-items: center;
                                            overflow: hidden;
                                        }

                                        .button:hover {
                                            background-color: #000;
                                        }

                                        .button:hover .button__icon-wrapper {
                                            color: #000;
                                        }

                                        .button__icon-svg--copy {
                                            position: absolute;
                                            transform: translate(-150%, 150%);
                                        }

                                        .button:hover .button__icon-svg:first-child {
                                            transition: transform .3s ease-in-out;
                                            transform: translate(150%, -150%);
                                        }

                                        .button:hover .button__icon-svg--copy {
                                            transition: transform .3s ease-in-out .1s;
                                            transform: translate(0);
                                        }
                                    </style>
                                    <button type="submit" style="--clr: #7808d0" class="button btn" name="import">
                                        <span class="button__icon-wrapper">
                                            <svg width="10" class="button__icon-svg"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15">
                                                <path fill="currentColor"
                                                    d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z">
                                                </path>
                                            </svg>

                                            <svg class="button__icon-svg  button__icon-svg--copy"
                                                xmlns="http://www.w3.org/2000/svg" width="10" fill="none"
                                                viewBox="0 0 14 15">
                                                <path fill="currentColor"
                                                    d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z">
                                                </path>
                                            </svg>
                                        </span>
                                        Import
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <script>
        function previewImage() {
            var input = document.getElementById("image-input");
            var preview = document.getElementById("image-preview");
            var customButton = document.getElementById("custom-button");

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var image = new Image();
                    image.src = e.target.result;

                    image.onload = function() {
                        preview.innerHTML =
                            '<img src="' +
                            e.target.result +
                            '" alt="Image Preview" class="img-fluid">';
                        customButton.style.display = "none"; // Hide the "Choose an image" label
                    };
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.innerHTML = "";
                customButton.style.display = "inline-block"; // Show the "Choose an image" label
            }
        }
    </script>
@endsection
