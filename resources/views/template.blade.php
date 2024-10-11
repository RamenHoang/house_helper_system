<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Trang quản trị
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> --}}
  <!-- CSS Files -->
  <link href="{{asset('./assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('./assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('./assets/demo/demo.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="//cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
  <style>
    /* CSS để ẩn nút Previous và Next */
.dataTables_paginate .paginate_button.previous,
.dataTables_paginate .paginate_button.next {
    display: none; /* Ẩn nút Previous và Next */
}

/* CSS để ẩn số trang */
.dataTables_paginate .paginate_button {
    display: none; /* Ẩn tất cả các số trang */
}

/* Nếu muốn ẩn phân trang hoàn toàn */
.dataTables_paginate {
    display: none; /* Ẩn cả khu vực phân trang */
}
/* CSS để thay đổi kích thước thanh tìm kiếm */
.dataTables_filter input {
  margin-left: 5px;
    width: 150px; /* Thay đổi chiều rộng của thanh tìm kiếm */
    height: 30px;
    font-size: 10px; /* Thay đổi kích thước font chữ trong thanh tìm kiếm */
    padding: 5px; /* Thay đổi khoảng cách bên trong của thanh tìm kiếm */
}
/* CSS để ẩn thông báo "Showing 1 to 2 of 2 entries" */
.dataTables_info {
    display: none; /* Ẩn thông báo thông tin */
}

  </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Your Logo 
          <div class="logo-image-big" style="margin-right: 91px;">
            <img src="{{asset('./assets/img/1.jpg')}}">
          </div> 
        </a>
      </div>
      @include('aside')
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">@yield('title')</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <div class="input-group-append">
                  <div class="input-group-text">
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">@yield('content')</h3>
          </div>
        </div>
      </div>
     
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('./assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('./assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('./assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('./assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
    </script>
</body>

</html>
