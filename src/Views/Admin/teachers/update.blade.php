@extends('layouts.master')

@section('title')
    Giáo Viên | Cập nhật giáo viên
@endsection

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Giáo Viên /</span><span> Cập Nhật Giáo Viên</span>
        </h4>

        <form action="" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
            <div class="app-ecommerce">
                <!-- Add Product -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">Cập Nhật Giáo Viên</h4>
                        <p>Cập nhật thông tin giáo viên Như Thanh 2</p>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <button type="reset" class="btn btn-outline-secondary">Nhập Lại</button>
                        <button class="btn btn-outline-primary">
                            <a href="/admin/teacher">Danh sách giáo viên</a>
                        </button>

                        <button type="submit" class="btn btn-primary">
                            Cập Nhật
                        </button>
                    </div>
                </div>

                <div class="row">
                    <!-- First column-->
                    <div class="col-12 col-lg-8">
                        <!-- Product Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-tile mb-0">Thông Tin Giáo Viên</h5>
                            </div>
                            <div class="container">
                                @if (!empty($_SESSION['success']))
                                    <div class="alert alert-success">
                                        {{ $_SESSION['success'] }}
                                    </div>

                                    @php
                                        $_SESSION['success'] = null;
                                    @endphp
                                @endif
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-floating form-floating-outline">
                                            <select id="select2Basic" name="teacher"
                                                class="select2 form-select form-select-lg" data-allow-clear="true">
                                                @foreach ($teaching as $teachings)
                                                    <option @if ($teachings['id'] == $teachers['p_teachers']) selected @endif
                                                        value="{{ $teachings['id'] }}">
                                                        {{ $teachings['teaching'] }}
                                                    </option>
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
                                                name="fullname" placeholder="Tên giáo viên"
                                                value="{{ $teachers['p_name'] }}" />
                                            <label for="bs-validation-name">Tên giáo viên</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <input type="text" class="form-control" id="bs-validation-address"
                                                name="address" placeholder="Quê quán"
                                                value="{{ $teachers['p_address'] }}" />
                                            <label for="bs-validation-address">Quê quán</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <input type="text" class="form-control" id="bs-validation-phone"
                                                name="phone" value="{{ $teachers['p_phone'] }}" />
                                            <label for="bs-validation-phone">Số điện thoại</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <input type="email" id="bs-validation-email" class="form-control"
                                                name="email" aria-label="email" value="{{ $teachers['p_email'] }}" />
                                            <label for="bs-validation-email">Email</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-floating form-floating-outline mb-4">
                                            <input type="text" class="form-control" id="bs-validation-Username"
                                                name="name" value="{{ $teachers['p_username'] }}" />
                                            <label for="bs-validation-Username">Username</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-password-toggle">
                                            <div class="input-group input-group-merge">
                                                <div class="form-floating form-floating-outline">
                                                    <input type="password" id="bs-validation-password" name="password"
                                                        class="form-control"
                                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                        value="{{ $teachers['p_password'] }}" />
                                                    <label for="bs-validation-password">Password</label>
                                                </div>
                                                <span class="input-group-text rounded-end cursor-pointer"
                                                    id="basic-default-password4"><i
                                                        class="mdi mdi-eye-off-outline"></i></span>

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
                            <div class="card-body text-center">
                                <div class="dz-message needsclick my-3" id="custom-button">
                                    Kéo và thả hình ảnh của bạn vào đây
                                    <small class="text-muted d-block fs-6 my-2">or</small>
                                    <label class="needsclick btn btn-outline-primary d-inline" for="image-input">Browse
                                        image</label>
                                </div>
                                <input type="file" id="image-input" name="image" accept="image/*"
                                    onchange="previewImage()" style="display: none" />
                                <div id="image-preview">
                                    <img class="rounded-4" src="{{ $teachers['p_image'] }}" alt="No Image"
                                        width="170px">
                                </div>
                            </div>
                        </div>
                        <!-- /Media -->
                    </div>
                </div>
            </div>
        </form>
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
