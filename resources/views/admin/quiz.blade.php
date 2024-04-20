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
                                    <a class="nav-link active" href="/quiz">
                                        <img class="nav-icon" src="/quiz.svg" alt="" srcset="">
                                        Quiz</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/generateqr">
                                        <img class="nav-icon" src="/qr.svg" alt="" srcset=""> Generate
                                        QR</a>
                                </li>
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
                        <li class="breadcrumb-item active"><span>Quiz</span></li>
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
                                <span style="font-size:25px;">QUIZZES</span>
                                <button style="float: right;font-size:15px;" class="btn btn-warning text-white"
                                    data-coreui-target="#addQuizModal" data-coreui-toggle="modal">Add</button>
                            </div>
                            <div class="card-body">
                                <br>
                                <div class="table-responsive">
                                    <table class="table border mb-0">
                                        <thead class="table-light fw-semibold">
                                            <tr class="align-middle">
                                                <th class="text-center">
                                                    Quiz ID
                                                </th>
                                                <th>Question</th>
                                                <th class="text-center">Category Name</th>
                                                <th>Flash Card Name</th>
                                                <th class="text-center">Date</th>
                                                <th>Action</th>
                                                <th class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($quizzes as $item)
                                                <tr class="align-middle">
                                                    <td class="text-center">
                                                        {{ $item->quizID }}
                                                    </td>
                                                    <td>
                                                        @if (strlen($item->question) > 10)
                                                            {{ substr($item->question, 0, 10) }}...
                                                        @else
                                                            {{ $item->question }}
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $item->categoryName }}
                                                    </td>
                                                    <td>
                                                        {{ $item->flashCardName }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ (new DateTime($item->created_at))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A') }}
                                                    </td>
                                                    <td>
                                                        <button class="btn" data-coreui-target="#updateQuizModal"
                                                            data-coreui-toggle="modal"
                                                            onclick="triggerUpdate({{ $item->quizID }},'{{ $item->question }}',{{ $item->flashCardID }},{{ $item->keyAnswer }})">
                                                            <img src="/edit.svg" alt="" srcset="">
                                                        </button>
                                                        <button class="btn" data-coreui-toggle="modal"
                                                            data-coreui-target="#deleteQuizModal"
                                                            onclick="triggerDelete({{ $item->quizID }})">
                                                            <img src="/fail.svg" alt="" srcset="">
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pagination">
                                            <ul class="pagination">
                                                @for ($i = 1; $i <= $quizzes->lastPage(); $i++)
                                                    <li class="page-item ">
                                                        <a class="page-link {{ $quizzes->currentPage() == $i ? 'active' : '' }}"
                                                            href="{{ $quizzes->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor
                                            </ul>

                                        </div>
                                    </div>
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

    <script src="./assets/files/coreui-utils.js.download"></script>
    <script></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
    <script>
        function triggerUpdate(quizID, question, flashCardID, keyAnswer) {
            let form = document.getElementById('updateQuizForm');
            form.action = `/quiz/${quizID}`;

            let f = document.getElementById('updateFlashCard');
            f.value = `${flashCardID}`;

            let q = document.getElementById('updateQuestion');
            q.value = question;


            let k = document.getElementById('updateKeyAnswer');
            if (keyAnswer) {
                k.value = "true";
            } else {
                k.value = "false";
            }

        }

        function triggerDelete(quizID) {
            let form = document.getElementById('deleteQuizForm');
            form.action = `/quiz/${quizID}`;
        }
    </script>

    <div class="modal fade " id="addQuizModal" tabindex="-1" role="dialog" aria-labelledby="addQuizModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row ">
                        <form action="{{ route('quiz.store') }}" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @method('post')
                            @csrf

                            <div class="form-group text-center">
                                <h5>ADD QUIZ</h5>
                            </div>

                            <div class="form-group">
                                <label for="flashCardName">Flash Card Name:</label>
                                <br>
                                <select class="form-control" name="flashCard" id="">
                                    <option value="">Select Flash Card</option>
                                    @foreach ($flashCards as $item)
                                        <option value="{{ $item['flashCardID'] }}">{{ $item['flashCardName'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="question">Question:</label>
                                <br>
                                <textarea style="height: 200px;" class="form-control" type="text" name="question" id=""></textarea>
                            </div>

                            <div class="form-group mt-2">
                                <label for="keyAnswer">Key Answer:</label>
                                <select required class="form-control" name="keyAnswer" id="">
                                    <option value="">Select Answer</option>
                                    <option value="true">True</option>
                                    <option value="false">False</option>
                                </select>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                        style="color:white !important;">Close</button>
                    <button type="submit" class="btn btn-warning" name="btnCreateQuiz" value="yes"
                        style="color:white !important;">Proceed Creation</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade " id="updateQuizModal" tabindex="-1" role="dialog"
        aria-labelledby="updateQuizModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row ">
                        <form id="updateQuizForm" action="" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @method('put')
                            @csrf

                            <div class="form-group text-center">
                                <h5>UPDATE QUIZ</h5>
                            </div>

                            <div class="form-group">
                                <label for="flashCardName">Flash Card Name:</label>
                                <br>
                                <select id="updateFlashCard" class="form-control" name="flashCard" id="">
                                    <option value="">Select Flash Card</option>
                                    @foreach ($flashCards as $item)
                                        <option value="{{ $item['flashCardID'] }}">{{ $item['flashCardName'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="question">Question:</label>
                                <br>
                                <textarea id="updateQuestion" style="height: 200px;" class="form-control" type="text" name="question"
                                    id=""></textarea>
                            </div>

                            <div class="form-group mt-2">
                                <label for="keyAnswer">Key Answer:</label>
                                <select id="updateKeyAnswer" required class="form-control" name="keyAnswer"
                                    id="">
                                    <option value="">Select Answer</option>
                                    <option value="true">True</option>
                                    <option value="false">False</option>
                                </select>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                        style="color:white !important;">Close</button>
                    <button type="submit" class="btn btn-warning" name="btnUpdateQuiz" value="yes"
                        style="color:white !important;">Proceed Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade " id="deleteQuizModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteQuizModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row ">
                        <form id="deleteQuizForm" action="" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @method('delete')
                            @csrf

                            <div class="form-group text-center">
                                <h5>DELETE QUIZ</h5>
                            </div>

                            <div class="form-group text-center">
                                <h6>
                                    Are You Sure You Want To Delete This Quiz?
                                </h6>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                        style="color:white !important;">Close</button>
                    <button type="submit" class="btn btn-danger" name="btnDeleteQuiz" value="yes"
                        style="color:white !important;">Proceed Delete</button>
                </div>
                </form>
            </div>
        </div>
    </div>


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

    @if (session()->pull('successUpdateQuiz'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated Quiz',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successUpdateQuiz') }}
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

    @if (session()->pull('errorDeleteQuiz'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Delete Quiz, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorDeleteQuiz') }}
    @endif

    @if (session()->pull('errorSaveQuiz'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Add Quiz, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorSaveQuiz') }}
    @endif

</body>

</html>
