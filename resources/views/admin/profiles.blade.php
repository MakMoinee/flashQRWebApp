<!DOCTYPE html>
<!-- saved from url=(0053)/admin_dashboard -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;
      charset=UTF-8">
    <!--<base href="./">-->
    <base href=".">

    <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
      shrink-to-fit=no">
    <title>Admin - FlashQR</title>
    <link rel="manifest" href="https://coreui.io/demos/bootstrap/4.2/free/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/files/simplebar.css">
    <link rel="stylesheet" href="./assets/files/simplebar(1).css">

    <link href="./assets/files/style.css" rel="stylesheet">

    <link rel="stylesheet" href="./assets/files/prism.css">
    <link href="./assets/files/examples.css" rel="stylesheet">
    <script type="text/javascript" async="" src="./assets/files/js"></script>
    <script src="./assets/files/667090843876081" async=""></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .sidebar {
            --cui-sidebar-bg: rgb(0, 145, 248) !important;
            color: white;
        }

        .sidebar-nav .nav-link.active {
            color: rgb(255, 255, 255);
            background: rgba(253, 245, 139, 0.349);
        }

        body {
            font-family: "Sen", sans-serif;
        }
    </style>
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <img src="/sidebarfull.png" class="sidebar-brand-full" width="118" height="46" alt=""
                srcset="">
            <img src="/sidebarnarrow.png" class="sidebar-brand-narrow" width="46" height="46" alt=""
                srcset="">
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right:
              0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <li class="nav-item">
                                    <a class="nav-link " href="/admin_dashboard">
                                        <img class="nav-icon" src="/home.svg" alt="" srcset="">Home
                                    </a>
                                </li>
                                <li class="nav-title">Administrative</li>
                                <li class="nav-item"><a class="nav-link " href="/activations">
                                        <img class="nav-icon" src="/activate.svg" alt="" srcset=""> Account
                                        Activation</a></li>
                                <li class="nav-title">Account Management</li>
                                <li class="nav-item"><a class="nav-link active" href="/profiles">
                                        <img class="nav-icon" src="/personal.svg" alt="" srcset="">
                                        Personal Details</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/password">
                                        <img class="nav-icon" src="/password.svg" alt="" srcset="">
                                        Password and Security</a>
                                </li>
                                <li class="nav-divider"></li>
                                <li class="nav-title">QR Integration</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/category">
                                        <img class="nav-icon" src="/category.svg" alt="" srcset=""> Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/flashcard">
                                        <img class="nav-icon" src="/card.svg" alt="" srcset=""> Flash
                                        Card</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/generateqr">
                                        <img class="nav-icon" src="/qr.svg" alt="" srcset=""> Generate
                                        QR</a>
                                </li>
                                <li class="nav-title">Record Management</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/user_records">
                                        <img class="nav-icon" src="/userrecords.svg" alt="" srcset="">
                                        User Records</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/history">
                                        <img class="nav-icon" src="/history.svg" alt="" srcset="">
                                        History Records</a>
                                </li>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 256px; height: 841px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility:
          hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display:
            none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 247px; transform: translate3d(0px, 0px, 0px);
            display: block;"></div>
            </div>
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector(&#39;#sidebar&#39;)).toggle()">
                    <img class="icon icon-lg" src="/menu.png" alt="" srcset="">
                </button>
                <a class="header-brand d-md-none" href="">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg>
                </a>
                <ul class="header-nav d-none d-md-flex">
                </ul>
                <ul class="header-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></a></li>
                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown"
                            href="" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="/logo.png"
                                    alt="user@email.com"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div><a class="dropdown-item" href="/profiles">
                                <img class="icon me-2" src="/personal black.svg" alt="" srcset="">
                                Personal Details</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">
                                <img class="icon me-2" src="/logout.svg" alt="" srcset=""> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                            <span>Home</span>
                        </li>
                        <li class="breadcrumb-item active"><span>Personal Details</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <img style="float: left;" src="/profile.png" width="120" height="120"
                                    class="img-responsive" alt="" srcset="">
                                <h2 style="float:left;margin-left: 30px; margin-top: 40px;">Upload A New Photo</h2>
                                <button style="float: right; margin-top: 40px;"
                                    class="btn btn-warning text-white">Update</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 style="color: rgb(0, 145, 248)">PERSONAL DETAILS</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="lastName">LAST NAME</label>
                                <br>
                                <input type="text" class="form-control" name="lastName" id=""
                                    value="{{ $currentUser['lastName'] }}">
                            </div>
                            <div class="col-lg-4">
                                <label for="firstName">FIRST NAME</label>
                                <br>
                                <input type="text" class="form-control" name="firstName" id=""
                                    value="{{ $currentUser['firstName'] }}">
                            </div>
                            <div class="col-lg-4">
                                <label for="middleName">MIDDLE NAME</label>
                                <br>
                                <input type="text" class="form-control" name="middleName" id=""
                                    value="{{ $currentUser['middleName'] }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-lg-6">
                                <label for="birthDate">BIRTH DATE</label>
                                <div class="row mt-1">
                                    <div class="col-lg-12">
                                        <input required class="form-control" type="number" name="day"
                                            id="" placeholder="Day"
                                            style="width: 125px !important; float: left;" min="1"
                                            max="31">
                                        <select required class="form-control" name="month" id=""
                                            style="width: 135px !important; float: left;">
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
                                            style="width: 135px !important; float: left;">
                                            <option value="">Year</option>
                                            @foreach ($yrs as $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-5" style="float: left;margin-right: 20px;">
                                            <label for="studentNumber">STUDENT NUMBER</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="{{ $currentUser['studentNumber'] }}" title="Student Number">
                                        </div>
                                        <div class="col-lg-5" style="float: left; ">
                                            <label for="level">LEVEL</label>
                                            <input type="text" class="form-control" name="" id=""
                                                value="{{ $currentUser['level'] }}" title="Level">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="guardian">GUARDIAN</label>
                                <br>
                                <input type="text" class="form-control" name="guardian" id=""
                                    value="{{ $currentUser['guardian'] }}">
                            </div>
                            <div class="col-lg-4">

                            </div>
                            <div class="col-lg-4">

                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4">
                                <label for="contactNumber">CONTACT NUMBER</label>
                                <br>
                                <input type="text" class="form-control" name="contactNumber" id=""
                                    value="{{ $currentUser['contactNumber'] }}">
                            </div>
                            <div class="col-lg-4">

                            </div>
                            <div class="col-lg-4">
                                <button style="float: right;margin-top: 20px;" type="submit"
                                    class="btn btn-warning text-white">Submit Changes</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <footer class="footer">
            <div>
                <a href="/">FlashQR</a> ©
                2024
            </div>
        </footer>
    </div>

    <script src="./assets/files/coreui.bundle.min.js.download"></script>
    <script src="./assets/files/simplebar.min.js.download"></script>

    <script src="./assets/files/chart.min.js.download"></script>
    <script src="./assets/files/coreui-chartjs.js.download"></script>
    <script src="./assets/files/coreui-utils.js.download"></script>
    <script src="./assets/files/main.js.download"></script>
    <script></script>

    @if (session()->pull('successActivate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Activated User',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successActivate') }}
    @endif

    @if (session()->pull('errorActivate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Activate User, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorActivate') }}
    @endif

    @if (session()->pull('successDeactivate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deactivated User',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successDeactivate') }}
    @endif

    @if (session()->pull('errorDeactivate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Deactivate User, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorDeactivate') }}
    @endif

    @if (session()->pull('successLogin'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Login Successfully',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successLogin') }}
    @endif
</body>

</html>
