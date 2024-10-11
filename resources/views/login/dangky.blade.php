<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body{
    margin-top:20px;
    background: #f6f9fc;
}
.account-block {
    padding: 0;
    background-image: url(https://bootdey.com/img/Content/bg1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    position: relative;
}
.account-block .overlay {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.4);
}
.account-block .account-testimonial {
    text-align: center;
    color: #fff;
    position: absolute;
    margin: 0 auto;
    padding: 0 1.75rem;
    bottom: 3rem;
    left: 0;
    right: 0;
}

.text-theme {
    color: #5369f8 !important;
}

.btn-theme {
    background-color: #5369f8;
    border-color: #5369f8;
    color: #fff;
}
    </style>
</head>
<body>
    <div id="main-wrapper" class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10" >
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="p-5" >
                                    <div class="mb-5">
                                        <h3 class="h4 font-weight-bold text-theme">Đăng ký tài khoản</h3>
                                    </div>
                                    <div class="mb-5" style="margin-top: -40px;">
                                       
                                        
                                    </div>
                                    
                                    <form style="margin-top: -40px" action="{{ route('login.dangkypost') }}" method="POST">
                                        <div class="form-group">
                                            <label>Loại tài khoản <span class="text-danger">*</span></label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="role_id" id="khachhang" value="2" required>
                                                <label class="form-check-label" for="khachhang">Khách hàng</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="role_id" id="baomau" value="1">
                                                <label class="form-check-label" for="baomau">Bảo mẫu</label>
                                            </div>
                                        </div>
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Họ và Tên <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="hoten" required>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Địa chỉ Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                                        </div>
                                    
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="exampleInputEmail1">Số điện thoại <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" name="sdt" required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="exampleInputEmail1">CCCD/CMND <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" name="cccd" required>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Địa chỉ nơi ở <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="diachi" required>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Công việc hiện tại <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="congviec" required>
                                        </div>
                                    
                                        <div class="form-group mb-5">
                                            <label for="exampleInputPassword1">Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                                        </div>
                                    
                                        <!-- Thêm lựa chọn loại tài khoản -->
                                        
                                    
                                        <button type="submit" class="btn btn-theme">Đăng ký</button>
                                        <a href="#l" class="forgot-link float-right text-primary">Quên mật khẩu?</a>
                                    </form>
                                     <br>
                                    <p>Đi đến trang <a href="{{route('login.dangnhap')}}">Đăng nhập</a></p>
                                </div>
                            </div>
    
                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block rounded-right">
                                    <div class="overlay rounded-right"></div>
                                    <div class="account-testimonial">
                                        <h4 class="text-white mb-4">Well Come to LoveMy!</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
    
                <p class="text-muted text-center mt-3 mb-0">Don't have an account? <a href="" class="text-primary ml-1">register</a></p>
    
                <!-- end row -->
    
            </div>
            <!-- end col -->
        </div>
        <!-- Row -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>