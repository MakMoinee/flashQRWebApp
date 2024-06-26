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
                    <div class="simplebar-offset" style="right:0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <li class="nav-item">
                                    <a class="nav-link " href="/admin_dashboard">
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
                                        <img class="nav-icon" src="/category.svg" alt="" srcset="">
                                        Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/flashcard">
                                        <img class="nav-icon" src="/card.svg" alt="" srcset=""> Flash
                                        Card</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/quiz">
                                        <img class="nav-icon" src="/quiz.svg" alt="" srcset="">
                                        Quiz</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/generateqr">
                                        <img class="nav-icon" src="/qr.svg" alt="" srcset=""> Generate
                                        QR</a>
                                </li>
                                <li class="nav-title">Record Management</li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/user_records">
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
                            <div class="avatar avatar-md"><img class="avatar-img" src="{{ $profilePhoto }}"
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
                        <li class="breadcrumb-item active"><span>User Records</span></li>
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

    <script src="./assets/files/coreui-utils.js.download"></script>
    <script></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
    <!-- Include jsPDF library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <!-- Include autoTable plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.21/jspdf.plugin.autotable.min.js"></script>


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
                            <li class="nav-item">
                                <a style="cursor: pointer" class="nav-link" id="account-tab" data-toggle="tab"
                                    role="tab" aria-controls="account" aria-selected="false">Account</a>
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
                            <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                                {{-- Account Content --}}
                                <!-- Add your content for Account here -->
                                <div class="form-group">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <form action="/user_records" method="post"
                                                        enctype="multipart/form-data" autocomplete="off">
                                                        @csrf
                                                        <div class="row">
                                                            <h3 class="colorBlue">CHANGE ACCOUNT INFO</h3>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-4"
                                                                    style="float: left;margin-left: 20px;">
                                                                    <div class="form-group">
                                                                        <label for="newPassword">New Password:</label>
                                                                        <input required class="form-control" required
                                                                            type="password" name="newPassword"
                                                                            id="">
                                                                        <input type="hidden" name="accountID"
                                                                            id="myAccountID">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4"
                                                                    style="float: left; margin-left: 20px;">
                                                                    <div class="form-group">
                                                                        <label for="confirmPass">Confirm New
                                                                            Password:</label>
                                                                        <input required class="form-control" required
                                                                            type="password" name="confirmPass"
                                                                            id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-warning"
                                                                    name="btnAdminUpdatePassword"
                                                                    value="yes
                                                                ">Save
                                                                    Changes</button>
                                                            </div>
                                                        </div>
                                                    </form>

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
                    <button type="button" onclick="exportToPDF(document.getElementById('myAccountID').value)"
                        class="btn btn-primary text-white">Export</button>
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                        style="color:white !important;">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        let results = @json($results);


        async function exportToPDF(id) {
            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF();

            // Get the table element
            const table = document.getElementById("resultsTable");

            // Extract table headers
            const headers = [];
            table.querySelectorAll("thead th").forEach(th => {
                headers.push(th.innerText);
            });

            // Extract table rows
            const data = [];
            table.querySelectorAll("tbody tr").forEach(tr => {
                const row = [];
                tr.querySelectorAll("td").forEach(td => {
                    row.push(td.innerText);
                });
                data.push(row);
            });

            // Generate the PDF with autoTable
            doc.autoTable({
                head: [headers],
                body: data,
            });

            // Save the PDF
            doc.save(`user_records_${id}.pdf`);
        }

        function showRecord(id) {
            let data = results[id];
            let tableBody = document.querySelector('#resultsTable tbody');
            let myAccountID = document.getElementById('myAccountID');
            myAccountID.value = id;

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


        document.addEventListener("DOMContentLoaded", function() {
            var interactiveTab = document.getElementById("interactive-tab");
            var accountTab = document.getElementById("account-tab");
            var interactivePane = document.getElementById("interactive");
            var accountPane = document.getElementById("account");

            accountTab.addEventListener("click", function() {
                interactiveTab.classList.remove("active");
                interactivePane.classList.remove("show", "active");
                accountTab.classList.add("active");
                accountPane.classList.add("show", "active");
            });

            interactiveTab.addEventListener("click", function() {
                accountTab.classList.remove("active");
                accountPane.classList.remove("show", "active");
                interactiveTab.classList.add("active");
                interactivePane.classList.add("show", "active");
            });
        });
    </script>


    @if (session()->pull('successDeleteQuiz'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Quiz',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successDeleteQuiz') }}
    @endif

    @if (session()->pull('successSaveQuiz'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added Quiz',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successSaveQuiz') }}
    @endif

    @if (session()->pull('successAdminUpdatePassword'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated User Password',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successAdminUpdatePassword') }}
    @endif

    @if (session()->pull('errorUpdateQuiz'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Update Quiz, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorUpdateQuiz') }}
    @endif

    @if (session()->pull('errorFlashCardExist'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Update Flash Card, Flash Card Name And Category Already Exist',
                    showConfirmButton: false,
                    timer: 1000
                });
            }, 500);
        </script>
        {{ session()->forget('errorFlashCardExist') }}
    @endif

    @if (session()->pull('adminNewPasswordNotMatch'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Passwords Don\'t Match, Please Try Again',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('adminNewPasswordNotMatch') }}
    @endif

    @if (session()->pull('errorAdminUpdatePassword'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Update User Password, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorAdminUpdatePassword') }}
    @endif

</body>

</html>
