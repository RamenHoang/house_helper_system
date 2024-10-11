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
          @if(auth()->user()->role_id==1)
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
          @endif
          @if(auth()->user()->role_id==2)
          <li>
            <a href="khachhang.dangtuyen"><span>Đăng Tuyển</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>
            
          </li>
          @endif
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
         <!-- Dropdown Tài Khoản -->
         <li><a href="#contact">Liên Hệ</a></li>

<li class="dropdown">
  <a href="#"><span>Tài Khoản</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
  <ul>
    <li><a href="#" data-bs-toggle="modal" data-bs-target="#personalInfoModal">Thông tin cá nhân</a></li>
    <li><a href="{{route('khachhang.dangxuat')}}" >Đăng xuất</a></li>
  </ul>
</li>

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