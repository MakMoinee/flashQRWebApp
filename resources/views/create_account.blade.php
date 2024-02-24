<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@600&display=swap" rel="stylesheet">
    <title>Create Account - FlashQR</title>
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
        }

        .header-area .main-nav .nav li:hover a {
            color: yellow !important;
        }

        .blueButton {
            color: rgba(0, 136, 232, 1) !important;
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
                            <li class="scroll-to-section"><a href="#services">About</a></li>
                            <li class="scroll-to-section"><a href="#frequently-question">Privacy Policy</a></li>

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
                    <center>
                        <h1>CREATE ACCOUNT</h1>
                    </center>
                    <br>
                    <form action="/create" method="post" enctype="application/x-www-form-urlencoded">
                        @csrf
                        <div class="row">
                            <div class="col-lg-3" style="float:left;">

                            </div>
                            <div class="col-lg-3" style="float:left;margin-right: 40px;">
                                <h4 class="blueButton">Account Details</h4>
                                <br>
                                <select required class="form-control" name="accountType" id=""
                                    aria-placeholder="Account Type">
                                    <option value="">Account Type</option>
                                    <option value="1">User</option>
                                </select>
                                <br>
                                <input required class="form-control" required type="text" name="studentNumber"
                                    id="" placeholder="Student Number">
                                <br>
                                <input required class="form-control" type="password" name="password" id=""
                                    placeholder="Password">
                                <br>
                                <input required class="form-control" type="password" name="confirmPass" id=""
                                    placeholder="Confirm Password">
                                <br>
                                <img src="/logo.png" class="img-responsive" alt="" srcset="">
                            </div>
                            <div class="col-lg-3" style="float:left;">
                                <h4 class="blueButton">Personal Details</h4>
                                <br>
                                <input required class="form-control" type="text" name="lastName" id=""
                                    placeholder="Last Name">
                                <br>
                                <input required class="form-control" type="text" name="firstName" id=""
                                    placeholder="First Name">
                                <br>
                                <input class="form-control" type="text" name="middleName" id=""
                                    placeholder="Middle Name">
                                <br>
                                <input required class="form-control" type="text" name="level" id=""
                                    placeholder="Level">
                                <br>
                                <label for="birthDate">Birth Date</label>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input required class="form-control" type="number" name="day"
                                            id="" placeholder="Day"
                                            style="width: 75px !important; float: left;">
                                        <select required class="form-control" name="month" id=""
                                            style="width: 85px !important; float: left;">
                                            <option value="">Mon</option>
                                            <option value="1">Jan</option>
                                            <option value="2">Feb</option>
                                            <option value="3">Mar</option>
                                            <option value="4">Apr</option>
                                            <option value="5">May</option>
                                            <option value="6">Jun</option>
                                            <option value="7">Jul</option>
                                            <option value="8">Aug</option>
                                            <option value="9">Sep</option>
                                            <option value="10">Oct</option>
                                            <option value="11">Nov</option>
                                            <option value="12">Dec</option>
                                        </select>
                                        <select required class="form-control" name="year" id=""
                                            style="width: 85px !important; float: left;">
                                            <option value="">Year</option>
                                            @foreach ($yrs as $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <input required class="form-control" type="text" name="guardian" id=""
                                    placeholder="Guardian Name">
                                <br>
                                <input required class="form-control" type="number" name="contactNumber"
                                    id="" placeholder="Contact Number">
                                <br>
                                <button type="submit" class="btn btn-warning" name="btnCreateAccount"
                                    value="yes">Create</button>
                            </div>
                            <div class="col-lg-3" style="float:left;">

                            </div>
                        </div>
                    </form>

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
    @if (session()->pull('errorCreate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Create Account',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorCreate') }}
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
