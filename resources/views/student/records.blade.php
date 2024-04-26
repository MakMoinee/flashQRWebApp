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

        .card-header {
            background: rgb(0, 145, 248) !important;
            color: white;
        }

        .colorBlue {
            color: rgb(0, 145, 248) !important;
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
                                <li class="nav-item"><a class="nav-link" href="/my_profile">
                                        <img class="nav-icon" src="/personal.svg" alt="" srcset="">
                                        Personal Details</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/my_password">
                                        <img class="nav-icon" src="/password.svg" alt="" srcset="">
                                        Password and Security</a>
                                </li>
                                <li class="nav-divider"></li>
                                <li class="nav-title">QR Integration</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/user_scanqr">
                                        <img class="nav-icon" src="/scan.svg" alt="" srcset=""> Scan
                                        QR</a>
                                </li>
                                <li class="nav-title">Record Management</li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/my_records">
                                        <img class="nav-icon" src="/userrecords.svg" alt="" srcset="">
                                        User Records</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/my_history">
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
                            <div class="avatar avatar-md"><img class="avatar-img" src="{{ $profilePhoto }}"
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <span style="font-size:25px;">USER RECORDS</span>
                            </div>
                            <div class="card-body">
                                <table class="table border mb-0">
                                    <thead class="table-light fw-semibold">
                                        <tr class="align-middle">
                                            <th class="text-center">Account ID</th>
                                            <th>Name</th>
                                            <th class="text-center">Role</th>
                                            <th>Approved By</th>
                                            <th class="text-center">Date</th>
                                            <th>Action</th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    {{ $item->accountID }}
                                                </td>
                                                <td>
                                                    {{ $item->lastName }}, {{ $item->firstName }}
                                                    {{ $item->middleName }}
                                                </td>
                                                <td class="text-center">
                                                    @if ($item->accountType == 1)
                                                        Admin
                                                    @else
                                                        Student
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $approver[$item->approver] }}

                                                </td>
                                                <td class="text-center">
                                                    {{ (new DateTime($item->created_at))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A') }}
                                                </td>
                                                <td>
                                                    <button onclick="showRecord({{ $item->accountID }})"
                                                        class="btn" data-coreui-toggle="modal"
                                                        data-coreui-target="#viewModal"><img src="/view.svg"
                                                            alt="" srcset=""></button>
                                                </td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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

    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">


                        <div class="form-group text-center">
                            <h5>VIEW USER RECORD</h5>
                        </div>
                        {{-- Tab Layout --}}
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a style="cursor: pointer" class="nav-link active" id="interactive-tab"
                                    data-toggle="tab" role="tab" aria-controls="interactive"
                                    aria-selected="true">Interactive Activity</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="interactive" role="tabpanel"
                                aria-labelledby="interactive-tab">
                                {{-- Interactive Activity Content --}}
                                <!-- Add your content for Interactive Activity here -->
                                <div class="form-group">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <table id="resultsTable" class="table border mb-0">
                                                        <thead class="table-light fw-semibold">
                                                            <tr class="align-middle">
                                                                <th class="text-center">Flash Card Name</th>
                                                                <th>Score</th>
                                                                <th class="text-center">Date</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End of Tab Layout --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                        style="color:white !important;">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        let results = @json($results);

        function showRecord(id) {
            let data = results[id];
            let tableBody = document.querySelector('#resultsTable tbody');

            if (data) {
                // Sort the data array by quizID
                data.sort((a, b) => a.quizID - b.quizID);

                // Clear existing rows from the table body
                tableBody.innerHTML = '';

                data.forEach(element => {
                    let row = document.createElement('tr');

                    let flashCardNameCell = document.createElement('td');
                    flashCardNameCell.textContent = element.flashCardName;
                    flashCardNameCell.classList.add('text-center');
                    row.appendChild(flashCardNameCell);

                    let scoreCell = document.createElement('td');
                    scoreCell.textContent = element.score;
                    row.appendChild(scoreCell);

                    let dateCell = document.createElement('td');
                    dateCell.textContent = element.created_at;
                    dateCell.classList.add('text-center');
                    row.appendChild(dateCell);

                    let actionCell = document.createElement('td');
                    row.appendChild(actionCell);

                    // Append the row to the table body
                    tableBody.appendChild(row);
                });

            }
        }
    </script>

    @if (session()->pull('successQuiz'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Completed Quiz',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successQuiz') }}
    @endif

    @if (session()->pull('errorExistAnswer'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'You Have Already Answered The Quiz Linked To That Qr Code',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorExistAnswer') }}
    @endif
    @if (session()->pull('errorQuiz'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Complete Quiz, Please Try Scanning Again',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorQuiz') }}
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
