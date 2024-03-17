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
                                    <a class="nav-link active" href="/admin_dashboard">
                                        <img class="nav-icon" src="/home.svg" alt="" srcset="">Home
                                    </a>
                                </li>
                                <li class="nav-title">Administrative</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/activations">
                                        <img class="nav-icon" src="/activate.svg" alt="" srcset=""> Account
                                        Activation</a>
                                </li>
                                <li class="nav-title">Account Management</li>
                                <li class="nav-item"><a class="nav-link" href="/activations">
                                        <img class="nav-icon" src="/personal.svg" alt="" srcset="">
                                        Personal Details</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/activations">
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
                                    <a class="nav-link" href="/quiz">
                                        <img class="nav-icon" src="/quiz.svg" alt="" srcset=""> Quiz</a>
                                </li>                                <li class="nav-item">
                                    <a class="nav-link" href="/generateqr">
                                        <img class="nav-icon" src="/qr.svg" alt="" srcset=""> Generate
                                        QR</a>
                                </li>
                                <li class="nav-title">Record Management</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/user_records">
                                        <img class="nav-icon" src="/userrecords.svg" alt="" srcset=""> User Records</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/history">
                                        <img class="nav-icon" src="/history.svg" alt="" srcset=""> History Records</a>
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
                        <li class="breadcrumb-item active"><span>Dashboard</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-primary">
                            <div
                                class="card-body pb-0 d-flex justify-content-between
                  align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">26K <span
                                            class="fs-6
                        fw-normal">(-12.4%
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom">
                                                </use>
                                            </svg>)</span></div>
                                    <div>Users</div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="">Action</a><a class="dropdown-item" href="">Another
                                            action</a><a class="dropdown-item" href="">Something
                                            else here</a></div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                <canvas class="chart" id="card-chart1" height="70" width="207"
                                    style="display: block; box-sizing: border-box; height: 70px;
                    width: 207px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-info">
                            <div
                                class="card-body pb-0 d-flex justify-content-between
                  align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">$6.200 <span
                                            class="fs-6
                        fw-normal">(40.9%
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top">
                                                </use>
                                            </svg>)</span></div>
                                    <div>Income</div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="">Action</a><a class="dropdown-item" href="">Another
                                            action</a><a class="dropdown-item" href="">Something
                                            else here</a></div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                <canvas class="chart" id="card-chart2" height="70" width="207"
                                    style="display: block; box-sizing: border-box; height: 70px;
                    width: 207px;"></canvas>
                                <div class="chartjs-tooltip"
                                    style="opacity: 0; left:
                    86.6667px; top: 132.625px;">
                                    <table style="margin: 0px;">
                                        <thead class="chartjs-tooltip-header">
                                            <tr class="chartjs-tooltip-header-item" style="border-width: 0px;">
                                                <th style="border-width:
                            0px;">March</th>
                                            </tr>
                                        </thead>
                                        <tbody class="chartjs-tooltip-body">
                                            <tr class="chartjs-tooltip-body-item">
                                                <td style="border-width: 0px;"><span
                                                        style="background:
                              rgb(51, 153, 255); border-color: rgba(255, 255,
                              255, 0.55); border-width: 2px; margin-right: 10px;
                              height: 10px; width: 10px; display:
                              inline-block;"></span>My
                                                    First dataset: 9</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-warning">
                            <div
                                class="card-body pb-0 d-flex justify-content-between
                  align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">2.49% <span
                                            class="fs-6
                        fw-normal">(84.7%
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top">
                                                </use>
                                            </svg>)</span></div>
                                    <div>Conversion Rate</div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="">Action</a><a class="dropdown-item" href="">Another
                                            action</a><a class="dropdown-item" href="">Something
                                            else here</a></div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3" style="height:70px;">
                                <canvas class="chart" id="card-chart3" height="70" width="239"
                                    style="display: block; box-sizing: border-box; height: 70px;
                    width: 239px;"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-danger">
                            <div
                                class="card-body pb-0 d-flex justify-content-between
                  align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">44K <span
                                            class="fs-6
                        fw-normal">(-23.6%
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom">
                                                </use>
                                            </svg>)</span></div>
                                    <div>Sessions</div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="">Action</a><a class="dropdown-item" href="">Another
                                            action</a><a class="dropdown-item" href="">Something
                                            else here</a></div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                <canvas class="chart" id="card-chart4" height="70" width="207"
                                    style="display: block; box-sizing: border-box; height: 70px;
                    width: 207px;"></canvas>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title mb-0">Traffic</h4>
                                <div class="small text-medium-emphasis">January - July 2022</div>
                            </div>
                            <div class="btn-toolbar d-none d-md-block" role="toolbar"
                                aria-label="Toolbar with buttons">
                                <div class="btn-group btn-group-toggle mx-3" data-coreui-toggle="buttons">
                                    <input class="btn-check" id="option1" type="radio" name="options"
                                        autocomplete="off">
                                    <label class="btn btn-outline-secondary"> Day</label>
                                    <input class="btn-check" id="option2" type="radio" name="options"
                                        autocomplete="off" checked="">
                                    <label class="btn btn-outline-secondary active"> Month</label>
                                    <input class="btn-check" id="option3" type="radio" name="options"
                                        autocomplete="off">
                                    <label class="btn btn-outline-secondary"> Year</label>
                                </div>
                                <button class="btn btn-primary" type="button">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                            <canvas class="chart" id="main-chart" height="300" width="1003"
                                style="display: block; box-sizing: border-box; height: 300px;
                  width: 1003px;"></canvas>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row row-cols-1 row-cols-md-5 text-center">
                            <div class="col mb-sm-2 mb-0">
                                <div class="text-medium-emphasis">Visits</div>
                                <div class="fw-semibold">29.703 Users (40%)</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col mb-sm-2 mb-0">
                                <div class="text-medium-emphasis">Unique</div>
                                <div class="fw-semibold">24.093 Users (20%)</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col mb-sm-2 mb-0">
                                <div class="text-medium-emphasis">Pageviews</div>
                                <div class="fw-semibold">78.706 Views (60%)</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col mb-sm-2 mb-0">
                                <div class="text-medium-emphasis">New Users</div>
                                <div class="fw-semibold">22.123 Users (80%)</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col mb-sm-2 mb-0">
                                <div class="text-medium-emphasis">Bounce Rate</div>
                                <div class="fw-semibold">40.15%</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar" role="progressbar"
                                        style="width:
                      40%" aria-valuenow="40" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <div
                                class="card-header position-relative d-flex
                  justify-content-center align-items-center">
                                <svg class="icon icon-3xl text-white my-4">
                                    <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-facebook-f"></use>
                                </svg>
                                <div
                                    class="chart-wrapper position-absolute top-0 start-0
                    w-100 h-100">
                                    <canvas id="social-box-chart-1" height="90"></canvas>
                                </div>
                            </div>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">89k</div>
                                    <div class="text-uppercase text-medium-emphasis small">friends</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">459</div>
                                    <div class="text-uppercase text-medium-emphasis small">feeds</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="card mb-4" style="--cui-card-cap-bg: #00aced">
                            <div
                                class="card-header position-relative d-flex
                  justify-content-center align-items-center">
                                <svg class="icon icon-3xl text-white my-4">
                                    <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-twitter"></use>
                                </svg>
                                <div
                                    class="chart-wrapper position-absolute top-0 start-0
                    w-100 h-100">
                                    <canvas id="social-box-chart-2" height="90"></canvas>
                                </div>
                            </div>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">973k</div>
                                    <div class="text-uppercase text-medium-emphasis small">followers</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">1.792</div>
                                    <div class="text-uppercase text-medium-emphasis small">tweets</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="card mb-4" style="--cui-card-cap-bg: #4875b4">
                            <div
                                class="card-header position-relative d-flex
                  justify-content-center align-items-center">
                                <svg class="icon icon-3xl text-white my-4">
                                    <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-linkedin"></use>
                                </svg>
                                <div
                                    class="chart-wrapper position-absolute top-0 start-0
                    w-100 h-100">
                                    <canvas id="social-box-chart-3" height="90"></canvas>
                                </div>
                            </div>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">500+</div>
                                    <div class="text-uppercase text-medium-emphasis small">contacts</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">292</div>
                                    <div class="text-uppercase text-medium-emphasis small">feeds</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">Traffic &amp; Sales</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div
                                                    class="border-start border-start-4
                            border-start-info px-3 mb-3">
                                                    <small class="text-medium-emphasis">New Clients</small>
                                                    <div class="fs-5 fw-semibold">9.123</div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div
                                                    class="border-start border-start-4
                            border-start-danger px-3 mb-3">
                                                    <small class="text-medium-emphasis">Recuring Clients</small>
                                                    <div class="fs-5 fw-semibold">22.643</div>
                                                </div>
                                            </div>

                                        </div>

                                        <hr class="mt-0">
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-medium-emphasis small">Monday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 34%" aria-valuenow="34" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-medium-emphasis small">Tuesday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 94%" aria-valuenow="94" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-medium-emphasis small">Wednesday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 12%" aria-valuenow="12" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 67%" aria-valuenow="67" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-medium-emphasis small">Thursday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 91%" aria-valuenow="91" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-medium-emphasis small">Friday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 22%" aria-valuenow="22" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 73%" aria-valuenow="73" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-medium-emphasis small">Saturday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 53%" aria-valuenow="53" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 82%" aria-valuenow="82" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-medium-emphasis small">Sunday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 9%" aria-valuenow="9" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 69%" aria-valuenow="69" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div
                                                    class="border-start border-start-4
                            border-start-warning px-3 mb-3">
                                                    <small class="text-medium-emphasis">Pageviews</small>
                                                    <div class="fs-5 fw-semibold">78.623</div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div
                                                    class="border-start border-start-4
                            border-start-success px-3 mb-3">
                                                    <small class="text-medium-emphasis">Organic</small>
                                                    <div class="fs-5 fw-semibold">49.123</div>
                                                </div>
                                            </div>

                                        </div>

                                        <hr class="mt-0">
                                        <div class="progress-group">
                                            <div class="progress-group-header">
                                                <svg class="icon icon-lg me-2">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user">
                                                    </use>
                                                </svg>
                                                <div>Male</div>
                                                <div class="ms-auto fw-semibold">43%</div>
                                            </div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-5">
                                            <div class="progress-group-header">
                                                <svg class="icon icon-lg me-2">
                                                    <use
                                                        xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-female">
                                                    </use>
                                                </svg>
                                                <div>Female</div>
                                                <div class="ms-auto fw-semibold">37%</div>
                                            </div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group">
                                            <div class="progress-group-header">
                                                <svg class="icon icon-lg me-2">
                                                    <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-google">
                                                    </use>
                                                </svg>
                                                <div>Organic Search</div>
                                                <div class="ms-auto fw-semibold me-2">191.235</div>
                                                <div class="text-medium-emphasis small">(56%)</div>
                                            </div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group">
                                            <div class="progress-group-header">
                                                <svg class="icon icon-lg me-2">
                                                    <use
                                                        xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-facebook-f">
                                                    </use>
                                                </svg>
                                                <div>Facebook</div>
                                                <div class="ms-auto fw-semibold me-2">51.223</div>
                                                <div class="text-medium-emphasis small">(15%)</div>
                                            </div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group">
                                            <div class="progress-group-header">
                                                <svg class="icon icon-lg me-2">
                                                    <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-twitter">
                                                    </use>
                                                </svg>
                                                <div>Twitter</div>
                                                <div class="ms-auto fw-semibold me-2">37.564</div>
                                                <div class="text-medium-emphasis small">(11%)</div>
                                            </div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 11%" aria-valuenow="11" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group">
                                            <div class="progress-group-header">
                                                <svg class="icon icon-lg me-2">
                                                    <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-linkedin">
                                                    </use>
                                                </svg>
                                                <div>LinkedIn</div>
                                                <div class="ms-auto fw-semibold me-2">27.319</div>
                                                <div class="text-medium-emphasis small">(8%)</div>
                                            </div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 8%" aria-valuenow="8" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table class="table border mb-0">
                                        <thead class="table-light fw-semibold">
                                            <tr class="align-middle">
                                                <th class="text-center">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people">
                                                        </use>
                                                    </svg>
                                                </th>
                                                <th>User</th>
                                                <th class="text-center">Country</th>
                                                <th>Usage</th>
                                                <th class="text-center">Payment Method</th>
                                                <th>Activity</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="./assets/files/1.jpg" alt="user@email.com"><span
                                                            class="avatar-status
                                bg-success"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>Yiorgos Avraamu</div>
                                                    <div class="small text-medium-emphasis"><span>New</span>
                                                        | Registered: Jan 1, 2020</div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-us">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-start">
                                                            <div class="fw-semibold">50%</div>
                                                        </div>
                                                        <div class="float-end"><small class="text-medium-emphasis">Jun
                                                                11, 2020 -
                                                                Jul 10, 2020</small></div>
                                                    </div>
                                                    <div class="progress progress-thin">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-mastercard">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-medium-emphasis">Last login</div>
                                                    <div class="fw-semibold">10 sec ago</div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-transparent p-0" type="button"
                                                            data-coreui-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="">Info</a><a
                                                                class="dropdown-item" href="">Edit</a><a
                                                                class="dropdown-item text-danger"
                                                                href="">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="./assets/files/2.jpg" alt="user@email.com"><span
                                                            class="avatar-status
                                bg-danger"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>Avram Tarasios</div>
                                                    <div class="small text-medium-emphasis"><span>Recurring</span>
                                                        | Registered: Jan 1, 2020</div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-br">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-start">
                                                            <div class="fw-semibold">10%</div>
                                                        </div>
                                                        <div class="float-end"><small class="text-medium-emphasis">Jun
                                                                11, 2020 -
                                                                Jul 10, 2020</small></div>
                                                    </div>
                                                    <div class="progress progress-thin">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-visa">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-medium-emphasis">Last login</div>
                                                    <div class="fw-semibold">5 minutes ago</div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-transparent p-0" type="button"
                                                            data-coreui-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="">Info</a><a
                                                                class="dropdown-item" href="">Edit</a><a
                                                                class="dropdown-item text-danger"
                                                                href="">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="./assets/files/3.jpg" alt="user@email.com"><span
                                                            class="avatar-status
                                bg-warning"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>Quintin Ed</div>
                                                    <div class="small text-medium-emphasis"><span>New</span>
                                                        | Registered: Jan 1, 2020</div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-in">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-start">
                                                            <div class="fw-semibold">74%</div>
                                                        </div>
                                                        <div class="float-end"><small class="text-medium-emphasis">Jun
                                                                11, 2020 -
                                                                Jul 10, 2020</small></div>
                                                    </div>
                                                    <div class="progress progress-thin">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 74%" aria-valuenow="74" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-stripe">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-medium-emphasis">Last login</div>
                                                    <div class="fw-semibold">1 hour ago</div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-transparent p-0" type="button"
                                                            data-coreui-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="">Info</a><a
                                                                class="dropdown-item" href="">Edit</a><a
                                                                class="dropdown-item text-danger"
                                                                href="">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="./assets/files/4.jpg" alt="user@email.com"><span
                                                            class="avatar-status
                                bg-secondary"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>Enéas Kwadwo</div>
                                                    <div class="small text-medium-emphasis"><span>New</span>
                                                        | Registered: Jan 1, 2020</div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-fr">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-start">
                                                            <div class="fw-semibold">98%</div>
                                                        </div>
                                                        <div class="float-end"><small class="text-medium-emphasis">Jun
                                                                11, 2020 -
                                                                Jul 10, 2020</small></div>
                                                    </div>
                                                    <div class="progress progress-thin">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 98%" aria-valuenow="98" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-paypal">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-medium-emphasis">Last login</div>
                                                    <div class="fw-semibold">Last month</div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-transparent p-0" type="button"
                                                            data-coreui-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="">Info</a><a
                                                                class="dropdown-item" href="">Edit</a><a
                                                                class="dropdown-item text-danger"
                                                                href="">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="./assets/files/5.jpg" alt="user@email.com"><span
                                                            class="avatar-status
                                bg-success"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>Agapetus Tadeáš</div>
                                                    <div class="small text-medium-emphasis"><span>New</span>
                                                        | Registered: Jan 1, 2020</div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-es">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-start">
                                                            <div class="fw-semibold">22%</div>
                                                        </div>
                                                        <div class="float-end"><small class="text-medium-emphasis">Jun
                                                                11, 2020 -
                                                                Jul 10, 2020</small></div>
                                                    </div>
                                                    <div class="progress progress-thin">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 22%" aria-valuenow="22" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-apple-pay">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-medium-emphasis">Last login</div>
                                                    <div class="fw-semibold">Last week</div>
                                                </td>
                                                <td>
                                                    <div class="dropdown dropup">
                                                        <button class="btn btn-transparent p-0" type="button"
                                                            data-coreui-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="">Info</a><a
                                                                class="dropdown-item" href="">Edit</a><a
                                                                class="dropdown-item text-danger"
                                                                href="">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="./assets/files/6.jpg" alt="user@email.com"><span
                                                            class="avatar-status
                                bg-danger"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>Friderik Dávid</div>
                                                    <div class="small text-medium-emphasis"><span>New</span>
                                                        | Registered: Jan 1, 2020</div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-pl">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="clearfix">
                                                        <div class="float-start">
                                                            <div class="fw-semibold">43%</div>
                                                        </div>
                                                        <div class="float-end"><small class="text-medium-emphasis">Jun
                                                                11, 2020 -
                                                                Jul 10, 2020</small></div>
                                                    </div>
                                                    <div class="progress progress-thin">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-amex">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-medium-emphasis">Last login</div>
                                                    <div class="fw-semibold">Yesterday</div>
                                                </td>
                                                <td>
                                                    <div class="dropdown dropup">
                                                        <button class="btn btn-transparent p-0" type="button"
                                                            data-coreui-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="">Info</a><a
                                                                class="dropdown-item" href="">Edit</a><a
                                                                class="dropdown-item text-danger"
                                                                href="">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
