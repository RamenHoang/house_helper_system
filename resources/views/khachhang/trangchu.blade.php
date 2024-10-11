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

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/css/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('assets/css/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

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

  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">LoveMy</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Trang Chủ</a></li>
          <li><a href="#about">Giới Thiệu</a></li>
          <li><a href="#services">Dịch Vụ</a></li>
          <li class="dropdown">
            <a href="#"><span>Ứng Tuyển</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              @foreach($job as $jobs)
                <li>
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modal{{ $jobs->id }}">
                    {{ $jobs->tencv }}
                  </a>
                </li>
              @endforeach
            </ul>
          </li>
          
          <!-- Modal cho từng công việc -->
          @foreach($job as $jobs)
          <div class="modal fade" id="modal{{ $jobs->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $jobs->id }}" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="modalLabel{{ $jobs->id }}">
                            @if ($jobs->id == 1)
                            <h5 style="color: black" class="modal-title" id="modalLabel{{ $jobs->id }}">Đăng ký công việc {{ $jobs->tencv }}</h5>
                            @endif
                            @if ($jobs->id == 2)
                            <h5 style="color: black" class="modal-title" id="modalLabel{{ $jobs->id }}">Đăng ký công việc {{ $jobs->tencv }}</h5>
                            @endif
                            @if ($jobs->id == 3)
                            <h5 style="color: black" class="modal-title" id="modalLabel{{ $jobs->id }}">Đăng ký công việc {{ $jobs->tencv }}</h5>
                            @endif
                            @if ($jobs->id == 4)
                            <h5 style="color: black" class="modal-title" id="modalLabel{{ $jobs->id }}">Đăng ký công việc {{ $jobs->tencv }}</h5>
                            @endif
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
      
                      <!-- Modal Body -->
                      <div class="modal-body" style="color: black">
                          @if($jobs->id == 1)
                              <!-- Modal for id=1: Trông trẻ tại nhà -->
                              <form method="POST" action="/submitJob">
                                  @csrf
                                  <div class="mb-3">
                                      <label for="tennv" class="form-label">Tên nhân viên</label>
                                      <input type="text" class="form-control" id="tennv" name="tennv" placeholder="Nhập tên của bạn">
                                  </div>
                                  <div class="mb-3">
                                      <label for="email" class="form-label">Email</label>
                                      <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email của bạn">
                                  </div>
                                  <h5>Đăng ký ca làm</h5>
                                    <div class="mb-3">
                                      <button class="btn btn-primary" style="width: 20%;  margin-left: -5px;">6:00-12:00</button>
                                    </div>
                                    
                                  <button type="submit" class="btn btn-primary">Gửi đi</button>
                              </form>
      
                          @elseif($jobs->id == 2)
                              <!-- Modal for id=2: Đưa đón trẻ đi học -->
                              <form method="POST" action="/submitJob">
                                  @csrf
                                  <div class="mb-3">
                                      <label for="tennv" class="form-label">Tên nhân viên</label>
                                      <input type="text" class="form-control" id="tennv" name="tennv" placeholder="Nhập tên của bạn">
                                  </div>
                                  <div class="mb-3">
                                      <label for="email" class="form-label">Email</label>
                                      <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email của bạn">
                                  </div>
                                  <button type="submit" class="btn btn-primary">Gửi đi</button>
                              </form>
      
                          @elseif($jobs->id == 3)
                              <!-- Modal for id=3 -->
                              <form method="POST" action="/submitJob">
                                  @csrf
                                  <div class="mb-3">
                                      <label for="tennv" class="form-label">Tên nhân viên</label>
                                      <input type="text" class="form-control" id="tennv" name="tennv" placeholder="Nhập tên của bạn">
                                  </div>
                                  <div class="mb-3">
                                      <label for="email" class="form-label">Email</label>
                                      <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email của bạn">
                                  </div>
                                  <button type="submit" class="btn btn-primary">Gửi đi</button>
                              </form>
      
                          @elseif($jobs->id == 4)
                              <!-- Modal for id=4 -->
                              <form method="POST" action="">
                                  @csrf
                                  <div class="mb-3">
                                      <label for="tennv" class="form-label">Tên nhân viên</label>
                                      <input type="text" class="form-control" id="tennv" name="tennv" placeholder="Nhập tên của bạn">
                                  </div>
                                  <div class="mb-3">
                                      <label for="email" class="form-label">Email</label>
                                      <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email của bạn">
                                  </div>
                                  
                                  <button type="submit" class="btn btn-primary">Gửi đi</button>
                              </form>
                          @endif
                      </div>
                      
                      <!-- Modal Footer -->
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
          
          </li>
          <li><a href="blog.html">Tin Tức</a></li>
          <li class="dropdown"><a href="#"><span>Tài Khoản</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Đăng Nhập</a></li>
              <li class="dropdown"><a href="#"><span>Đăng Ký</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Tài Khoản Khách Hàng</a></li>
                  <li><a href="#">Tài Khoản Bảo Mẫu</a></li>
                </ul>
              
            </ul>
          </li>
          <li><a href="#contact">Liên Hệ</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="{{asset('./assets/img/img/hero-carousel/tre.png')}}" alt="">
          <div class="carousel-container">
            <h2>Chào mừng bạn đến với LoveMy</h2>
            <p> Dịch Vụ Trông Trẻ Tại Nhà Theo Giờ - Nơi trọn niềm tin và sự chăm sóc tận tâm cho các thiên thần nhỏ trong gia đình. Chúng tôi tự hào là đơn vị hàng đầu cung cấp dịch vụ trông trẻ tại nhà, nơi bạn có thể yên tâm trao gửi niềm tin và thời gian cho công việc của mình mà không lo lắng về con cái. </p>
            <a href="#featured-services" class="btn-get-started">Bắt Đầu Trải Nghiệm</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{asset('./assets/img/img/hero-carousel/tre1.png')}}" alt="">
          <div class="carousel-container">
            <h2>Dịch Vụ Trông Trẻ Tại Nhà Theo Giờ</h2>
            <p>Dịch vụ bảo mẫu trông giữ trẻ tại nhà LoveMy là nơi các bậc cha mẹ có thể gửi gắm con mình.Giúp phụ huynh có con từ 0 - 11 tuổi dễ dàng tìm được bảo mẫu uy tín, linh hoạt và phù hợp với nhu cầu của gia đình.</p>
            <a href="#featured-services" class="btn-get-started">Bắt Đầu Trải Nghiệm</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{asset('./assets/img/img/hero-carousel/tre2.png')}}" alt="">
          <div class="carousel-container">
            <h2>Đội Ngũ Bảo Mẫu</h2>
            <p>Giàu kinh nghiệm của chúng tôi không chỉ yêu thương mà còn hiểu rõ nhu cầu và đam mê của trẻ nhỏ. Chúng tôi cam kết tạo môi trường an toàn, vui chơi và học tập, giúp các bé phát triển toàn diện từ tinh thần đến thể chất.</p>
            <a href="#featured-services" class="btn-get-started">Bắt Đầu Trải Nghiệm</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{asset('./assets/img/img/hero-carousel/tre3.png')}}" alt="">
          <div class="carousel-container">
            <h2>Đa Dạng Dịch Vụ</h2>
            <p>Linh hoạt và phù hợp với mọi gia đình, bạn có thể dễ dàng lựa chọn các gói dịch vụ phù hợp với lịch trình và nhu cầu riêng biệt. Chúng tôi luôn sẵn sàng lắng nghe và tư vấn, đảm bảo mỗi trẻ em đều nhận được sự quan tâm và đồng hành tận tâm trên con đường trưởng thành.</p>
            <a href="#featured-services" class="btn-get-started">Bắt Đầu Trải Nghiệm</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{asset('./assets/img/img/hero-carousel/tre4.jpg')}}" alt="">
          <div class="carousel-container">
            <h2>Đồng Hành Cùng Chúng Tôi</h2>
            <p>Giúp gia đình bạn sẽ thấy an tâm và hạnh phúc, bởi chúng tôi không chỉ chăm sóc trẻ như con của riêng mình mà còn xây dựng một tương lai tươi sáng cho từng thiên thần. Hãy để chúng tôi đồng hành cùng bạn, vượt qua mọi thử thách của cuộc sống. .</p>
            <a href="#featured-services" class="btn-get-started">Bắt Đầu Trải Nghiệm</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section dark-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
            <div>
              <h4 class="title">Trông Trẻ Tại Nhà Theo Giờ</h4>
              <p class="description">Uy tín và chuyên nghiệp sẽ đảm bảo một số tiêu chí quan trọng như kinh nghiệm, chuyên môn, tâm huyết và trách nhiệm. Đội ngũ bảo mẫu có kinh nghiệm sẽ biết cách đối phó với các tình huống khó khăn, giúp trẻ cảm thấy an toàn và yên tâm.</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Xem Thêm</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
            <div>
              <h4 class="title">Chăm Sóc Người Già</h4>
              <p class="description">Với nhu cầu thiết thực thì dịch vụ chăm sóc người già tại nhà và tại bệnh viện đã trở nên quen thuộc đối với chúng ta. Với tiêu chí cung cấp người chăm sóc chuyên nghiệp uy tín chọn đúng người đúng việc để cung cấp vì thế luôn tạo niềm tin cho mọi người.</p>
              <a href="service-details1.html" class="readmore stretched-link"><span>Xem Thêm</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
            <div>
              <h4 class="title">Đưa Đón Trẻ Đi Học</h4>
              <p class="description">Dịch vụ đưa đón học sinh và con trẻ giúp cha mẹ giảm bớt áp lực và căng thẳng khi họ phải cân nhắc giữa công việc, cuộc sống gia đình và các hoạt động khác. Nó giúp họ tiết kiệm thời gian và năng lượng để dành cho những hoạt động quan trọng khác trong cuộc sống.</p>
              <a href="service-details2.html" class="readmore stretched-link"><span>Xem Thêm</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Về Chúng Tôi</h2>
        <p>Đội ngũ nhân viên trông trẻ của chúng tôi được tuyển chọn kỹ lưỡng, đào tạo chuyên nghiệp và có đam mê trong việc chăm sóc và giáo dục trẻ em.
          Tất cả nhân viên trông trẻ đều có đào tạo chuyên môn về giáo dục trẻ em và chứng chỉ cấp phép liên quan. Họ có kinh nghiệm làm việc với trẻ em ở các độ tuổi khác nhau và hiểu rõ những yêu cầu riêng biệt của từng độ tuổi.
          Tuân thủ các quy định về an toàn và chất lượng dịch vụ trong quá trình trông nom trẻ em. Chúng tôi tạo môi trường an toàn và vui chơi phù hợp, đồng thời sử dụng các thiết bị giáo dục và đồ chơi an toàn để giúp trẻ em phát triển toàn diện.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Hello!!!</p>
            <h3>Phương Châm Hành Động</h3>
            <p class="fst-italic">
              Đến với Dịch Vụ Trông Trẻ Tại Nhà Theo Giờ LoveMy chúng tôi cam kết !!!
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Đảm bảo an toàn tuyệt đối cho bé.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Tận tình và chu đáo khi làm việc.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Giám sát và hỗ trợ kịp thời.</span></li>
            </ul>
            <a href="#" class="read-more"><span>Bắt đầu trải nghiệm</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="{{asset('./assets/img/img/pc1.png')}}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="{{asset('./assets/img/img/pc2.png')}}" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="{{asset('./assets/img/img/pc3.png')}}" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->
<!-- Stats Section -->
<section id="stats" class="stats section light-background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
          <p>Clients</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
          <p>Projects</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hours Of Support</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
          <p>Workers</p>
        </div>
      </div><!-- End Stats Item -->
  

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Dịch Vụ</h2>
        <p>An toàn - Uy tín - Chất lượng</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-briefcase icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Trông Trẻ Tại Nhà Theo Giờ</a></h4>
                <p class="description">Uy tín và chuyên nghiệp sẽ đảm bảo một số tiêu chí quan trọng như kinh nghiệm, chuyên môn, tâm huyết và trách nhiệm. Đội ngũ bảo mẫu có kinh nghiệm sẽ biết cách đối phó với các tình huống khó khăn, giúp trẻ cảm thấy an toàn và yên tâm.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-card-checklist icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="service-details1.html" class="stretched-link">Chăm Sóc Người Già</a></h4>
                <p class="description"> Với nhu cầu thiết thực thì dịch vụ chăm sóc người già tại nhà và tại bệnh viện đã trở nên quen thuộc đối với chúng ta. Với tiêu chí cung cấp người chăm sóc chuyên nghiệp uy tín chọn đúng người đúng việc để cung cấp vì thế luôn tạo niềm tin cho mọi người. </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-bar-chart icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="service-details2.html" class="stretched-link">Đưa Đón Trẻ Đi Học</a></h4>
                <p class="description">Dịch vụ đưa đón học sinh và con trẻ giúp cha mẹ giảm bớt áp lực và căng thẳng khi họ phải cân nhắc giữa công việc, cuộc sống gia đình và các hoạt động khác. Nó giúp họ tiết kiệm thời gian và năng lượng để dành cho những hoạt động quan trọng khác trong cuộc sống.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-binoculars icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="service-details3.html" class="stretched-link">Dọn Dẹp Nhà Cửa</a></h4>
                <p class="description">Giúp tối ưu hóa công việc dọn dẹp, mang lại không gian sống và làm việc sạch sẽ, an toàn, hiệu quả, tiết kiệm chi phí và thời gian. Sử dụng dịch vụ Maxxservice không chỉ đảm bảo môi trường trong lành mà còn tạo điều kiện cho một cuộc sống và môi trường làm việc tốt hơn.</p>
              </div>
            </div>
         </div>

        </div>

      </div>

    </section><!-- /Services Section -->
    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Bảng Giá Dịch Vụ Năm 2024</h2>
        <p>GIỮ TRẺ SƠ SINH & TRẺ NHỎ TẠI NHÀ</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="zoom-in" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Gói Theo Giờ</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>$</sup>30.000đ<span>/Giờ</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Trông Trẻ Tại Nhà Theo Giờ</span></li>
                <li><i class="bi bi-check"></i> <span>Đưa Đón Trẻ Đi Học</span></li>
                <li><i class="bi bi-check"></i> <span>Chăm Sóc Người Già</span></li>
                <li><i class="bi bi-check"></i> <span>Dọn Dẹp Nhà Cửa</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Đăng Kí Ngay</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Gói Theo Ngày</h3>
              <div class="icon">
                <i class="bi bi-rocket"></i>
              </div>

              <h4><sup>$</sup>250.000đ<span>/Ngày</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Trông Trẻ Tại Nhà Theo Giờ</span></li>
                <li><i class="bi bi-check"></i> <span>Đưa Đón Trẻ Đi Học</span></li>
                <li><i class="bi bi-check"></i> <span>Chăm Sóc Người Già</span></li>
                <li><i class="bi bi-check"></i> <span>Dọn Dẹp Nhà Cửa</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Đăng Kí Ngay</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Gói Theo Tháng</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><sup>$</sup>6.000.000đ<span>/Tháng</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Trông Trẻ Tại Nhà Theo Giờ</span></li>
                <li><i class="bi bi-check"></i> <span>Đưa Đón Trẻ Đi Học</span></li>
                <li><i class="bi bi-check"></i> <span>Chăm Sóc Người Già</span></li>
                <li><i class="bi bi-check"></i> <span>Dọn Dẹp Nhà Cửa</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Đăng Kí Ngay</a></div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Liên Hệ</h2>
        <p>Thông Tin Liên Hệ</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-geo-alt"></i>
              <h3>Địa Chỉ</h3>
              <p>190/2T- phường Hưng Lợi- Q.Ninh Kiều- TPCT</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center info-item-borders">
              <i class="bi bi-telephone"></i>
              <h3>Số Điện Thoại</h3>
              <p>0972456377</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email </h3>
              <p>LoveMy@example.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form  action="{{route('khachhang.themyeucaupost')}}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
          @csrf
          <div class="row gy-4" style="color: black">

            <div class="col-md-6" style="color: black">
              <input type="text" name="hoten" class="form-control" placeholder="Họ Tên" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder=" Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="chude" placeholder="Chủ Đề" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="noidung" rows="6" placeholder="Nội Dung" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Tin nhắn của bạn đã được gửi. Cảm ơn!</div>

              <button type="submit">Gửi Yêu Cầu</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

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