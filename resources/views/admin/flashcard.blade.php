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
                                    <a class="nav-link active" href="/flashcard">
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
                        <li class="breadcrumb-item active"><span>Flash Cards</span></li>
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
                                <span style="font-size:25px;">Flash Cards</span>
                                <button style="float: right;font-size:15px;" class="btn btn-warning text-white"
                                    data-coreui-target="#addFlashCardModal" data-coreui-toggle="modal">Add</button>
                            </div>
                            <div class="card-body">
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
                                                <th>Name</th>
                                                <th class="text-center">Category</th>
                                                <th>Description</th>
                                                <th class="text-center">Created By</th>
                                                <th>Action</th>
                                                <th class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($flashCards as $item)
                                                <tr class="align-middle">
                                                    <td class="text-center">
                                                        <div class="avatar avatar-md"><img class="avatar-img"
                                                                src="{{ $item['imagePath'] }}" alt=""><span
                                                                class="avatar-status bg-success"></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>{{ $item['flashCardName'] }}</div>
                                                        <div class="small text-medium-emphasis">Created:
                                                            {{ (new DateTime($item['created_at']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A') }}
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $item['categoryName'] }}
                                                    </td>
                                                    <td>
                                                        {{ $item['description'] }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $item['createdBy'] }}
                                                    </td>
                                                    <td>
                                                        <button class="btn" data-coreui-toggle="modal"
                                                            data-coreui-target="#updateFlashCardModal"
                                                            onclick="triggerUpdate({{ $item['flashCardID'] }},'{{ $item['imagePath'] }}','{{ $item['flashCardName'] }}','{{ $item['categoryID'] }}','{{ $item['description'] }}')">
                                                            <img src="/edit.svg" alt="" srcset="">
                                                        </button>
                                                        <button class="btn" data-coreui-toggle="modal"
                                                            data-coreui-target="#deleteFlashCardModal"
                                                            onclick="triggerDelete({{ $item['flashCardID'] }},'{{ $item['imagePath'] }}')">
                                                            <img src="/fail.svg" alt="" srcset="">
                                                        </button>
                                                    </td>
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

    <div class="modal fade " id="addFlashCardModal" tabindex="-1" role="dialog"
        aria-labelledby="addFlashCardModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row ">
                        <form action="{{ route('flashcard.store') }}" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @method('post')
                            @csrf

                            <div class="form-group text-center">
                                <h5>CREATE FLASH CARD</h5>
                            </div>
                            <div class="form-group">
                                <a onclick="document.getElementById('mFile').click();">
                                    <center>
                                        <img id="addPhoto" src="/addPhoto.svg" alt="" srcset=""
                                            style="width: 200px; height: 200px;">
                                    </center>
                                </a>
                                <input id="mFile" type="file" style="display: none;" name="imagePath"
                                    onchange="previewImage(event)">
                            </div>

                            <div class="form-group">
                                <label for="flashCardName">Flash Card Name:</label>
                                <input required type="text" class="form-control" name="flashCardName"
                                    id="">
                            </div>

                            <div class="form-group mt-2">
                                <label for="categoryName">Category Name:</label>
                                <select required class="form-control" name="category" id="">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item['categoryID'] }}">{{ $item['categoryName'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="description">Description:</label>
                                <input required class="form-control" type="text" name="description"
                                    id="">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                        style="color:white !important;">Close</button>
                    <button type="submit" class="btn btn-warning" name="btnCreateFlashCard" value="yes"
                        style="color:white !important;">Proceed Creation</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade " id="updateFlashCardModal" tabindex="-1" role="dialog"
        aria-labelledby="updateFlashCardModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row ">
                        <form id="updateFormFlashCard" action="" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @method('put')
                            @csrf

                            <div class="form-group text-center">
                                <h5>UPDATE FLASH CARD</h5>
                            </div>
                            <div class="form-group">
                                <a onclick="document.getElementById('updateFile').click();">
                                    <center>
                                        <img id="updatePhoto" src="" alt="" srcset=""
                                            style="width: 200px; height: 200px;">
                                    </center>
                                </a>
                                <input id="updateFile" type="file" style="display: none;" name="updateImagePath"
                                    onchange="previewUpdateImage(event)">
                            </div>

                            <div class="form-group">
                                <label for="updateFlashCardName">Flash Card Name:</label>
                                <input required type="text" class="form-control" name="updateFlashCardName"
                                    id="updateFlashCardName">
                            </div>

                            <div class="form-group mt-2">
                                <label for="categoryName">Category Name:</label>
                                <select required class="form-control" name="updateCategory" id="updateCategory">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item['categoryID'] }}">{{ $item['categoryName'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="description">Description:</label>
                                <input required class="form-control" type="text" name="description"
                                    id="updateDesc">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                        style="color:white !important;">Close</button>
                    <button type="submit" class="btn btn-warning" name="btnUpdateFlashCard" value="yes"
                        style="color:white !important;">Proceed Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade " id="deleteFlashCardModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteFlashCardModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row ">
                        <form id="deleteFormFlashCard" action="" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @method('delete')
                            @csrf

                            <div class="form-group text-center">
                                <h5>DELETE FLASH CARD</h5>
                            </div>
                            <div class="form-group text-center">
                                <h6>Are You Sure You Want To Delete This Flash Card?</h6>
                                <input type="hidden" id="deleteImagePath" name="deleteImagePath">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                        style="color:white !important;">Close</button>
                    <button type="submit" class="btn btn-danger" name="btnDeleteFlashCard" value="yes"
                        style="color:white !important;">Proceed Deletion</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @if (session()->pull('successDeleteFlashCard'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Flash Card',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successDeleteFlashCard') }}
    @endif

    @if (session()->pull('successAddFlashCard'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added Flash Card',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successAddFlashCard') }}
    @endif

    @if (session()->pull('successUpdateFlashCard'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Updated Flash Card',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successUpdateFlashCard') }}
    @endif

    @if (session()->pull('errorUpdateFlashCard'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Update Flash Card, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorUpdateFlashCard') }}
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

    @if (session()->pull('errorDeleteFlashCard'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Delete Flash Card, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorDeleteFlashCard') }}
    @endif

    @if (session()->pull('errorAddFlashCard'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Add Flash Card, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorAddFlashCard') }}
    @endif

    <script>
        function previewImage(event) {
            var files = event.currentTarget.files;
            if (files && files[0]) {
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('addPhoto');
                    if (output) {
                        output.src = reader.result;
                    }
                };
                reader.readAsDataURL(files[0]);
            }
        }

        function previewUpdateImage(event) {
            var files = event.currentTarget.files;
            if (files && files[0]) {
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('updatePhoto');
                    if (output) {
                        output.src = reader.result;
                    }
                };
                reader.readAsDataURL(files[0]);
            }
        }

        function triggerDelete(id, imagePath) {
            let form = document.getElementById('deleteFormFlashCard');
            form.action = `/flashcard/${id}`;

            let img = document.getElementById('deleteImagePath');
            img.value = imagePath;
        }

        function triggerUpdate(id, imagePath, flashCardName, category, desc) {
            let form = document.getElementById('updateFormFlashCard');
            form.action = `/flashcard/${id}`;

            let img = document.getElementById('updatePhoto');
            img.src = imagePath;

            let fName = document.getElementById('updateFlashCardName');
            fName.value = flashCardName;

            let description = document.getElementById('updateDesc');
            description.value = desc;

            let c = document.getElementById('updateCategory');
            c.value = category;

        }
    </script>
</body>

</html>
