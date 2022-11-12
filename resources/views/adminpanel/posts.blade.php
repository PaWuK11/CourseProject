<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Всі пости</title>
    <link rel="stylesheet" href="../../vendors4/feather/feather.css">
    <link rel="stylesheet" href="../../vendors4/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../vendors4/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors4/typicons/typicons.css">
    <link rel="stylesheet" href="../../vendors4/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors4/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../js4/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css4/vertical-layout-light/style.css">
</head>
<body>
<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="{{route('home')}}">
                <img src="../../images/НОВАЯ-эмблема-МБФК-.svg" alt="logo"/>
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item d-none d-lg-block">
                <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
                    <input type="text" class="form-control">
                </div>
            </li>


            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    {{auth()->user()->name}} </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <p class="mb-1 mt-3 font-weight-semibold">{{auth()->user()->name}}</p>
                        <p class="fw-light text-muted mb-0">{{auth()->user()->email}}</p>
                    </div>

                    <a href="{{route('logout')}}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Вийти</a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin')}}">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="menu-icon mdi mdi-card-text-outline"></i>
                    <span class="menu-title">На головну</span>
                </a>
            </li>
            <li class="nav-item nav-category">Пости</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                   aria-controls="ui-basic">
                    <i class="menu-icon mdi mdi-floor-plan"></i>
                    <span class="menu-title">Пости</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="{{route('view_posts')}}">Переглянути</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('create_posts')}}">Створити</a></li>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Користувачі</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                   aria-controls="form-elements">
                    <i class="menu-icon mdi mdi-account-circle-outline"></i>
                    <span class="menu-title">Користувачі</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-elements">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Список</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
    <div style="display: block;" class="row row-padded-mb">

        <div class="card-body">
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Created at
                        </th>
                        <th>

                        </th>
                        <th>

                        </th>
                        <th>

                        </th>
                    </tr>
                    </thead>
                    @foreach($posts as $post)
                    <tbody>
                    <tr>
                        <td>
                            {{$post->id}}
                        </td>
                        <td>
                            {{$post->title}}
                        </td>
                        <td>
                            {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('d.m.Y')}}

                        </td>
                        <td>
                            <a href="#">Переглянути</a>
                        </td>
                        <td>
                            <a href="{{'posts/'.$post->id.'/edit'}}">Редагувати</a>
                        </td>
                        <td>
                            <a href="#" onclick="return confirm('Підтвердити видалення')">Видалити</a>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

</div>
<!-- plugins:js -->
<script src="../../vendors4/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../../vendors4/chart.js/Chart.min.js"></script>
<script src="../../vendors4/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="../../vendors4/progressbar.js/progressbar.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../../js4/off-canvas.js"></script>
<script src="../../js4/hoverable-collapse.js"></script>
<script src="../../js4/template.js"></script>
<script src="../../js4/settings.js"></script>
<script src="../../js4/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../../js4/jquery.cookie.js" type="text/javascript"></script>
<script src="../../js4/dashboard.js"></script>
<script src="../../js4/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->

</body>
</html>
