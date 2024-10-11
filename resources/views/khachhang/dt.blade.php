<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Cung Cấp Các Dịch Vụ Về Bảo Mẫu</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/css/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('assets/css/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!-- Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    .modal {
    z-index: 9999; /* Đảm bảo modal có z-index cao hơn backdrop */
}
.modal-backdrop {
    z-index: -1055;
}
body{
  margin-top:20px;
  @yield('body');
}
.contact-area {
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
}

@media only screen and (max-width:768px) {
    .contact {
        margin-bottom: 60px;
    }
}

.contact input {
    background: #fff;
    border: 1px solid #fff;
    border-radius: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #232434;
    font-size: 16px;
    height: 60px;
    padding: 10px;
    width: 100%;
    font-family: 'poppins', sans-serif;
    padding-left: 30px;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.contact textarea {
    background: #fff;
    border: 1px solid #fff;
    border-radius: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #232434;
    font-size: 16px;
    padding: 10px;
    width: 100%;
    font-family: 'poppins', sans-serif;
    padding-left: 30px;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.contact input:focus {
    background: #fff;
    border: 1px solid #fff;
    color: #232434;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: 0 none;
}

.contact textarea:focus {
    background: #fff;
    border: 1px solid #fff;
    color: #232434;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: 0 none;
}

.form-control::placeholder {
    color: #232434;
    opacity: 1;
}

.btn-contact-bg {
    border-radius: 30px;
    color: #fff;
    outline: medium none !important;
    padding: 15px 27px;
    text-transform: capitalize;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    background: #7564e5;
    font-family: 'poppins', sans-serif;
    cursor: pointer;
    width: 100%;
}

.btn-contact-bg:hover,
.btn-contact-bg:focus {
    background: #232434;
    color: #fff;
}

/*START ADDRESS*/

.single_address {
    overflow: hidden;
    margin-bottom: 10px;
    padding-left: 40px;
}

@media only screen and (max-width:768px) {
    .single_address {
        padding-left: 0px;
    }
}

.single_address i {
    background: #f6f6f6;
    color: #7564e5;
    border-radius: 30px;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    float: left;
    margin-right: 14px;
    font-size: 22px;
    -webkit-box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

.single_address:hover i {
    background: #7564e5;
    color: #fff;
}

.single_address h4 {
    font-size: 18px;
    margin-bottom: 0px;
    overflow: hidden;
    font-weight: 600;
}

.single_address p {
    overflow: hidden;
    margin-top: 5px;
}

.section-title h1 {
    font-size: 44px;
    font-weight: 500;
    margin-top: 0;
    position: relative;
    text-transform: capitalize;
    margin-bottom: 15px;
}
.section-title p {
    padding: 0 10px;
    width: 70%;
    margin: auto;
    letter-spacing: 1px;
}
.section-title {
    margin-bottom: 60px;
}
.text-center {
    text-align: center!important;
}



  </style>
  @yield('css')
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: rgb(86, 211, 197);">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">LoveMy</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        
        
         <li><a href="{{route('khachhang.danhsach')}}" style="margin-left: 20px;"> <i class="fa-solid fa-rotate-left" style="margin-right: 10px"></i> Trở về trang chủ</a></li>


<!-- Modal Thông tin cá nhân -->
    <div class="modal fade" id="personalInfoModal" tabindex="-1" aria-labelledby="personalInfoModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="color: rgb(0, 0, 0)">
            <h5 class="modal-title" id="personalInfoModalLabel">Thông tin cá nhân</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="color: rgb(0, 0, 0)">
            <!-- Nội dung thông tin cá nhân sẽ hiển thị ở đây -->
            <form action="{{route('khachhang.thongtincanhan')}}" method="POST">
              @csrf
              <div class="row">

                  <input type="hidden" name="id" value="{{auth()->user()->id}}">
                  <div class="col-6">
                      <div class="form-group">
                          <i class="fa-solid fa-user" style="color: #008375;"></i>
                          <label class="emailaddress" for="exampleInputEmail1">Tên</label>
                          <input name="name" type="text" class="form-control"
                              id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                              value="{{auth()->user()->name}}" required>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <i class="fa-solid fa-envelope" style="color: #008375;"></i>
                          <label class="emailaddress" for="exampleInputEmail1">Email</label>
                          <input required name="email" value="{{auth()->user()->email}}" type="email"
                              class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                              placeholder="" style="">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <i class="fa-solid fa-address-card" style="color: #008375;"></i>
                          <label class="emailaddress" for="exampleInputEmail1">CCCD</label>
                          <input required name="CCCD" value="{{auth()->user()->cccd}}" type="text"
                              class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                              placeholder=" " style=" ">
                      </div>
                      </div>
                      <div class="col-6">
                      <div class="form-group">
                          <i class="fa-solid fa-phone" style="color: #008375;"></i>
                          <label class="emailaddress" for="exampleInputEmail1">SĐT</label>
                          <input required name="SDT" value="{{auth()->user()->sdt}}" type="text"
                              class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                              placeholder="" >
                      </div>
                      </div>
                      <div class="col-6">
                      <div class="form-gioitinh">
                          <i class="fa-solid fa-venus-mars" style="color: #008375;"></i>
                          <label class="emailaddresss" for="exampleInputEmail1">Giới tính </label>
                          <input class="gt"  type="radio" id="male"
                              name="gioitinh" value="male" @if(auth()->user()->gioitinh == 'male')
                          checked
                          @endif
                          >


                          <label for="male">Nam</label>

                          <input class="gt" style="margin-left: 10px" type="radio" id="female"
                              name="gioitinh" value="female" @if(auth()->user()->gioitinh == 'female')
                          checked
                          @endif
                          >
                          <label for="female">Nữ</label><br>
                      </div>
                      </div> <br><br>
                      <div class="row">
                          <div class="col-6">
                           <button type="submit" class="btn btn-primary" style="background-color:#008375; color:aliceblue ">Cập nhật</button>
                           </div>
                      </div>

                  </div>
          </form>

          </div>
          <div class="modal-footer" style="color: rgb(0, 0, 0)">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <div class="container-fluid">
    <div class="bg-container"> <!-- Sử dụng lớp CSS mới -->
        <div class="content" style="position: relative; z-index: 2;"> <!-- Chỉ định z-index cho nội dung để hiện lên trên lớp mờ -->
            @yield('dangtuyen')
        </div>
    </div>
</div>



  <footer id="footer" class="footer dark-background" style="margin-top: 10px">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">LoveMy</span>
          </a>
          <div class="footer-contact pt-3">
            <p>190/2T, Đường 30/4-Phường Hưng Lợi</p>
            <p>Quận Ninh Kiều, TPCT</p>
            <p class="mt-3"><strong>Phone:</strong> <span>0972456377</span></p>
            <p><strong>Email:</strong> <span>Lovemy@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Liên kết hữu ích</h4>
          <ul>
            <li><a href="#">Trang Chủ</a></li>
            <li><a href="#">Về Chúng Tôi</a></li>
            <li><a href="#">Dịch Vụ</a></li>
            <li><a href="#">Điều Khoản Dịch Vụ</a></li>
            <li><a href="#">Chính Sách Bảo Mật</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Dịch Vụ Của Chúng Tôi</h4>
          <ul>
            <li><a href="#">Trông trẻ tại nhà theo giờ</a></li>
            <li><a href="#">Đưa đón trẻ đi học</a></li>
            <li><a href="#">Chăm sóc người già</a></li>
            <li><a href="#">Dọn dẹp nhà cửa</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Ý Kiến Phản Hồi</h4>
          <p>Gửi Phản Hồi Về Ngay Cho Chúng Tôi!!!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Gửi"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Phản hồi đã được gửi đi . Cảm ơn!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Website</span> <strong class="px-1 sitename">Dịch Vụ Trông Trẻ</strong> <span>LoveMy</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Thiết kế bởi <a href="https://bootstrapmade.com/">Phương Thảo</a>
      </div>
    </div>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>