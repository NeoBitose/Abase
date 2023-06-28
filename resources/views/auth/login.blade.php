<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Login</title>
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/pages/authentication.css') }}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Material Admin</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
            <style>
                .auth-wrapper {
                    background-color: lightgray  no-repeat left center;
                }
            </style>

            <span class="lg-log"><img src="{{ asset('images/logo.png') }}" width="auto" height="120" alt="logo" /></span>
            <style>
                .lg-log {
                    position: absolute;
                    top: 20px;
                    left: 20px;
                }
            </style>
            <div class="container">
                <div class="row">
                    <div class="col s12 l8 m6 demo-text">
                        <!-- <span class="db"><img src="../../assets/images/logo-text.png" alt="logo" /></span> -->
                        <h1 class="font-light m-t-40">Selamat datang di <span class="font-medium " style="color: #27176f;">
                                ABASE</span></h1>
                        <p>Aplikasi untuk mempermudah sekolah melakukan pembayaran administrasi sekolah, temukan berbagai hal menarik disini</p>
                        <!-- <a class="btn btn-round red m-t-5">Know more</a> -->
                    </div>
                </div>
                <div class="auth-box auth-sidebar">
                    <div id="loginform">
                        <div class="p-l-10">
                            <h5 class="font-medium m-b-0 " style="margin-top: 110px;">Login Aplikasi ABASE</h5>
                            <small>login akun anda</small>
                        </div><br>
                        <!-- Form -->
                        <div class="row">
                            <form class="col s12" method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- email -->                               
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="name" name="name" type="text" class="validate" required>
                                        <label for="name">Username</label>
                                    </div>
                                </div>
                                
                                <!-- pwd -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" name="password" type="password" class="validate" required>
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <!-- pwd -->
                                <!-- <div class="row m-t-5">
                                    <div class="col s7">
                                        <label>
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                            <span>Remember Me</span>
                                        </label>
                                    </div>                                    
                                </div> -->
                                <div class="row m-t-40">
                                    <div class="col s12">
                                        <button class="btn-large w100 accent-4" type="submit"
                                            style="background-color: #27176f;">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/materialize.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $('.tooltipped').tooltip();
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function () {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
        $(function () {
            $(".preloader").fadeOut();
        });
    </script>
</body>

</html>