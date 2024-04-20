<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">

    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@600&display=swap" rel="stylesheet">
    <title>Account Authentication - FlashQR</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* rgba(0, 136, 232, 1) */
        .header-area.header-sticky {
            background: rgba(0, 136, 232, 1) !important;
            color: white !important;
        }

        .background-header .logo,
        .background-header .main-nav .nav li a {
            color: white !important;
            font-family: "Sen", sans-serif;
        }

        @media only screen and (max-width: 767px) {

            /* Styles for mobile screens (black text) */
            .background-header .logo,
            .background-header .main-nav .nav li a {
                color: black !important;
            }

            #about {
                margin-top: 150px !important;
            }

            #logoDiv {
                margin-top: 20px !important;
            }
        }

        .header-area .main-nav .nav li:hover a {
            color: yellow !important;
        }

        .blueButton {
            color: rgba(0, 136, 232, 1) !important;
        }

        .least {
            width: 250px !important;
            margin-bottom: 15px;
        }

        body {
            font-family: "Sen", sans-serif;
        }
    </style>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky background-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">FLASH QR</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="">Home</a></li>
                            <li class="submenu" >
                                <a href="javascript:;">Administrative</a>
                                <ul>
                                    <li><a href="/create" style="color: black !important;" >Create Account</a></li>
                                    {{-- <li><a href="/login" style="color: black !important;">Acount Activation</a></li> --}}
                                    <li><a href="/login" style="color: black !important;">Authentication</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="/about">About</a></li>
                            <li class="scroll-to-section"><a href="/privacy_policy">Privacy Policy</a></li>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6" style="float: left">
                        <form action="/login" method="post" enctype="application/x-www-form-urlencoded">
                            @csrf
                            <h3 class="blueButton" style="width: 250px !important;">
                                <center>LOGIN</center>
                            </h3>
                            <br>
                            <input required class="form-control least" type="text" name="studentNumber"
                                id="" placeholder="Student Number">
                            <input required class="form-control least" type="password" name="password" id=""
                                placeholder="Password">
                            <button class="btn btn-warning least" type="submit" name="btnLogin"
                                value="yes">Login</button>
                            <h6 class="least">
                                <center>OR</center>
                            </h6>
                        </form>
                        <a href="/create" class="least btn btn-primary">Create Account</a>
                    </div>
                    <div class="col-lg-6" style="float: left" id="logoDiv">
                        <img src="/logo.png" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->




    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <p class="copyright">Copyright &copy; 2024 FlashQR</p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    @if (session()->pull('successCreate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Created Account',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successCreate') }}
    @endif
    @if (session()->pull('errorLogin'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Wrong Username or Password',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorLogin') }}
    @endif
    @if (session()->pull('passwordNotMatch'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Passwords Doesn\'t Match',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('passwordNotMatch') }}
    @endif

    @if (session()->pull('errorNotActivated'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Account Not Activated, Please Wait For Admin To Be Activated',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorNotActivated') }}
    @endif
    @if (session()->pull('accountExist'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Student Number Already Exist',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('accountExist') }}
    @endif
</body>

</html>
