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
    <title>Student - FlashQR</title>
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
            --cui-sidebar-bg: rgb(0, 116, 248) !important;
            color: white;
        }

        .sidebar-nav .nav-link {
            color: rgb(255, 255, 255) !important;
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
                                    <a class="nav-link " href="/student_dashboard">
                                        <img class="nav-icon" src="/home.svg" alt="" srcset="">Home
                                    </a>
                                </li>
                                <li class="nav-title">Account Management</li>
                                <li class="nav-item"><a class="nav-link active" href="/my_profile">
                                        <img class="nav-icon" src="/personal.svg" alt="" srcset="">
                                        Personal Details</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/passwords">
                                        <img class="nav-icon" src="/password.svg" alt="" srcset="">
                                        Password and Security</a>
                                </li>
                                <li class="nav-divider"></li>
                                <li class="nav-title">QR Integration</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/scanqr">
                                        <img class="nav-icon" src="/scan.svg" alt="" srcset=""> Scan
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
                            </div><a class="dropdown-item" href="/my_profile">
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
                        <li class="breadcrumb-item active"><span>Dashboard</span></li>
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
                    <form action="/my_profile/{{ $currentUser['accountID'] }}" method="post"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
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
                                    <input required type="text" class="form-control" name="lastName"
                                        id="" value="{{ $currentUser['lastName'] }}">
                                </div>
                                <div class="col-lg-4">
                                    <label for="firstName">FIRST NAME</label>
                                    <br>
                                    <input required type="text" class="form-control" name="firstName"
                                        id="" value="{{ $currentUser['firstName'] }}">
                                </div>
                                <div class="col-lg-4">
                                    <label for="middleName">MIDDLE NAME</label>
                                    <br>
                                    <input required type="text" class="form-control" name="middleName"
                                        id="" value="{{ $currentUser['middleName'] }}">
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
                                                max="31" value="{{ $birthDay }}">
                                            <select required class="form-control" name="month" id=""
                                                style="width: 135px !important; float: left;">
                                                <option value="">Mon</option>
                                                @for ($i = 1; $i <= $months; $i++)
                                                    @if ($birthMonth == $i)
                                                        <option value="{{ $i }}" selected>
                                                            {{ $monthText[$i - 1] }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $i }}">{{ $monthText[$i - 1] }}
                                                        </option>
                                                    @endif
                                                @endfor
                                            </select>
                                            <select required class="form-control" name="year" id=""
                                                style="width: 135px !important; float: left;">
                                                <option value="">Year</option>
                                                @foreach ($yrs as $item)
                                                    @if ($birthYear == $item)
                                                        <option value="{{ $item }}" selected>
                                                            {{ $item }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $item }}">{{ $item }}
                                                        </option>
                                                    @endif
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
                                                <input disabled required type="text" class="form-control"
                                                    name="studentNumber" id=""
                                                    value="{{ $currentUser['studentNumber'] }}"
                                                    title="Student Number">
                                            </div>
                                            <div class="col-lg-5" style="float: left; ">
                                                <label for="level">LEVEL</label>
                                                <input required type="text" class="form-control" name="level"
                                                    id="" value="{{ $currentUser['level'] }}"
                                                    title="Level">
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
                                    <input required type="text" class="form-control" name="guardian"
                                        id="" value="{{ $currentUser['guardian'] }}">
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
                                    <input required type="text" class="form-control" name="contactNumber"
                                        id="" value="{{ $currentUser['contactNumber'] }}">
                                </div>
                                <div class="col-lg-4">

                                </div>
                                <div class="col-lg-4">
                                    <button style="float: right;margin-top: 20px;" type="submit"
                                        class="btn btn-warning text-white" name="btnUpdateProfile"
                                        value="yes">Submit Changes</button>
                                </div>
                            </div>

                        </div>
                    </form>

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
    @if (session()->pull('errorUpdateProfile'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Update Profile, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorUpdateProfile') }}
    @endif
    @if (session()->pull('successUpdate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated Profile',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successUpdate') }}
    @endif
</body>

</html>
