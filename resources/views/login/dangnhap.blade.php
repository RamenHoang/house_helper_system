<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Nhập</title>
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
                                        <h3 class="h4 font-weight-bold text-theme">Đăng nhập tài khoản bảo mẫu <span class="text-danger">*</span></h3>
                                    </div>
                                    <div class="mb-5" >
                                    </div>
                                    <form action="{{route('login.dangnhappost')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Địa chỉ Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="exampleInputPassword1">Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                        </div>
                                        <button type="submit" class="btn btn-theme">Login</button> <br><br>
                                        <p>Quay trở lại <a href="{{route('login.dangky')}}"> Đăng ký</a></p>
                                        <a href="#l" class="forgot-link float-right text-primary">Forgot password?</a>
                                    </form>
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