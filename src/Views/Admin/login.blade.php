<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link id="favicon" rel="icon" href="/Assets/Admin/img/icons/logoipsum-296.svg">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/../../Assets/Admin/css/admin.css">
    <title>𝑨𝒅𝒎𝒊𝒏_𝑷𝒐𝒘𝒆𝒓</title>
    <style>
        .alert {
            position: absolute;
            top: 10px;
            left: 10px;
        }
    </style>
</head>

<body>
    {{-- @if (!@empty($_SESSION['errors']))
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($_SESSION['errors'] as $key => $error)
                    <li>Key: {{ $key }} - error: {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="/../../Assets/Admin/img/avatars/team.jpg" alt="IMG">
                </div>

                <!--=====TIÊU ĐỀ======-->

                <form action="" method="post" class="login100-form validate-form"
                    onsubmit="onSubmitForm(this); return false;">
                    <span class="login100-form-title">
                        <b>ĐĂNG NHẬP HỆ THỐNG</b>
                    </span>

                    <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->

                    <form action="#">
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="email" name="email" id="email"
                                placeholder="Tài khoản quản trị">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-user'></i>
                            </span>
                        </div>
                        <p id="errorUsername"></p>
                        <div class="wrap-input100 validate-input">
                            <input autocomplete="off" class="input100 hidden-show" type="password" name="password"
                                id="password" placeholder="Mật khẩu">
                            <span class="bx fa-fw bx-hide field-icon eye-hidden"></span>
                            <span class="bx bx-show field-icon eye-show hidden"></span>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-key'></i>
                            </span>
                        </div>
                        <p id="errorPassword"></p>

                        <!--=====ĐĂNG NHẬP======-->

                        <div class="container-login100-form-btn">
                            <input type="submit" value="Đăng Nhập">
                        </div>

                        <!--=====LINK TÌM MẬT KHẨU======-->

                        <div class="text-right p-t-12">
                            <a class="txt2" href="#">
                                Bạn quên mật khẩu?
                            </a>
                        </div>
                    </form>

                    <!--=====FOOTER======-->

                    <div class="text-center p-t-70 txt2">
                        Phần mềm quản lý bán hàng Code bởi Dương </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/../../Assets/Admin/js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>

</html>
