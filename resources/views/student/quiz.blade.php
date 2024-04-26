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
                                    <a class="nav-link" href="/my_records">
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
                        <li class="breadcrumb-item active"><span>Quiz</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-14">
                            <div class="card-body">
                                @if ($flashCardName)
                                    @if ($imagePath)
                                        <img id="imgLogo" style="width: 100%;height:350px;margin-bottom: 30px;"
                                            src="{{ $imagePath }}" alt="" srcset="">
                                    @endif
                                    <h3>Flash Card: <b>{{ $flashCardName }}</b> </h3>
                                    <h3>Category Name: <b>{{ $categoryName }}</b> </h3>
                                    <h5 id="fDesc">Description: <b>{{ $description }}</b> </h5>
                                @endif
                                <button id="btnProceedQuiz" class="btn btn-primary mt-3"
                                    onclick="hideHeader()">Proceed Quiz</button>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div id="quizdiv" style="display: none;">
                    @foreach ($quiz as $item)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <span style="font-size:25px;">Quiz {{ $item['sequence'] }} Of
                                            {{ $count }}
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>{{ $item['question'] }}</h3>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-2" style="float: left;">
                                                    <button class="btn"
                                                        onclick="storeAnswer({{ $item['sequence'] }},1,{{ $item['quizID'] }},{{ $item['flashCardID'] }})"><img
                                                            src="/checkCircle.svg" alt=""
                                                            srcset=""></button>
                                                </div>
                                                <div class="col-md-2" style="float: left;">
                                                    <button class="btn"
                                                        onclick="storeAnswer({{ $item['sequence'] }},0,{{ $item['quizID'] }},{{ $item['flashCardID'] }})"><img
                                                            src="/cancel.svg" alt="" srcset=""></button>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <br>
                    <button data-coreui-toggle="modal" data-coreui-target="#finishQuizModal" class="btn btn-primary"
                        onclick="printAnswer()">Finish Quiz</button>
                    <br>
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

    <div class="modal fade " id="finishQuizModal" tabindex="-1" role="dialog"
        aria-labelledby="finishQuizModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row ">
                        <form action="{{ route('student_quiz.store') }}" method="POST"
                            enctype="multipart/form-data" autocomplete="off">
                            @method('post')
                            @csrf

                            <div class="form-group">
                                <h3>COMPLETE QUIZ</h3>
                            </div>
                            <div class="form-group">
                                <h5>Are You Sure You Want To Finish This Quiz?</h5>
                                <input id="myQuiz" type="hidden" name="list" value="">
                                <input id="myCards" type="hidden" name="cards" value="">
                                <input id="myAnswer" type="hidden" name="answer" value="">
                                <input type="hidden" name="description"
                                    value="Flash Card={{ $flashCardName }}, Category={{ $categoryName }}">
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                        style="color:white !important;">Close</button>
                    <button type="submit" class="btn btn-warning" name="btnCompleteQuiz" value="yes"
                        style="color:white !important;">Proceed Complete Quiz</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./assets/files/coreui.bundle.min.js.download"></script>
    <script src="./assets/files/simplebar.min.js.download"></script>

    <script src="./assets/files/chart.min.js.download"></script>
    <script src="./assets/files/coreui-chartjs.js.download"></script>
    <script src="./assets/files/coreui-utils.js.download"></script>
    <script src="./assets/files/main.js.download"></script>
    <script>
        let answerArray = [];
        let quizArray = [];
        let flashArray = [];

        function hideHeader() {

            let btnProceedQuiz = document.getElementById('btnProceedQuiz');
            let quizdiv = document.getElementById('quizdiv');
            let fDesc = document.getElementById('fDesc');
            let imgLogo = document.getElementById('imgLogo');

            quizdiv.removeAttribute("style");

            btnProceedQuiz.removeAttribute("style");
            btnProceedQuiz.setAttribute("style", "display:none;");

            fDesc.removeAttribute("style");
            fDesc.setAttribute("style", "display:none;");

            imgLogo.removeAttribute("style");
            imgLogo.setAttribute("style", "display:none;");

        }

        function storeAnswer(index, value, quizID, flashCardID) {
            answerArray[index - 1] = value;
            quizArray[index - 1] = quizID;
            flashArray[index - 1] = flashCardID;
        }

        function printAnswer() {
            let myCards = document.getElementById('myCards');
            let myQuiz = document.getElementById('myQuiz');
            let myAnswer = document.getElementById('myAnswer');
            myAnswer.value = answerArray;
            myQuiz.value = quizArray;
            myCards.value = flashArray;
        }
    </script>



    @if (session()->pull('successRetrieveQuiz'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Scanned QR',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successRetrieveQuiz') }}
    @endif

    @if (session()->pull('errorRetrieveQuiz'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Scanned QR Doesn\'t Have Any Quiz Linked, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);

            setTimeout(() => {
                window.location = '/user_scanqr';
            }, 1200);
        </script>
        {{ session()->forget('errorRetrieveQuiz') }}
    @endif
</body>

</html>
