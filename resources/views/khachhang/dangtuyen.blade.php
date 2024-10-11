@extends('khachhang.dt')
@section('css')

.bg-container {
    position: relative; /* Để các phần tử con sử dụng vị trí tương đối */
    background-image: url('{{asset('./assets/img/2.jpg')}}'); /* Đường dẫn đến hình nền */
    background-size: cover; /* Làm cho hình nền phủ toàn bộ */
    background-position: center; /* Canh giữa hình nền */
    padding: 20px; /* Tùy chỉnh khoảng cách cho nội dung */
    border-radius: 8px; /* Nếu cần, để làm tròn các góc */
}

.bg-container::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(86, 217, 180, 0.5); 
    z-index: 1; 
}
@endsection
@section('css2')
style="background-color: #008375"
@endsection
@section('body')
background:#008375;
@endsection
@section('dangtuyen')

<div id="contact" class="contact-area section-padding">
    <div class="container">                                        
        <div class="section-title text-center" style="margin-top: 100px">
            <h1>ĐĂNG TUYỂN BẢO MẪU</h1>
            <p>(Vui lòng điền thông tin.)</p>
        </div>                  
        <div class="row">
            <div class="col-lg-7">    
                <div class="contact">
                    <form method="post" action="{{ route('khachhang.themdangtuyen') }}">
                        @csrf
                        <div class="form-group">
                            <label for="thoigian_lamviec">Chọn thời gian làm việc</label>
                            <select id="thoigian_lamviec" name="thoigian_lamviec" class="form-control" required onchange="toggleDateInputs()">
                                <option value="" disabled selected>-- Chọn thời gian --</option>
                                <option value="trong_ngay">Trong ngày</option>
                                <option value="nhieu_ngay">Nhiều ngày</option>
                            </select>
                        </div>
                    
                        <!-- Input cho "trong ngày" -->
                        <div id="ngay_tuyen" class="form-group" style="display: none;">
                            <label for="ngay">Ngày tuyển</label>
                            <input type="date" name="ngay" class="form-control">
                        </div>
                    
                        <!-- Input cho "nhiều ngày" -->
                        <div id="ngaybd_ketthuc" style="display: none;">
                            <div class="form-group">
                                <label for="ngaybd">Ngày bắt đầu</label>
                                <input type="date" id="ngaybd" name="ngaybd" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ngaykt">Ngày kết thúc</label>
                                <input type="date" id="ngaykt" name="ngaykt" class="form-control" onchange="validateDates()">
                                <span id="date-error" style="color: rgb(241, 245, 0); display: none; text-shadow: 
                1px 1px 0 rgb(118, 0, 0), 
                -1px -1px 0 rgb(201, 0, 0), 
                -1px 1px 0 rgb(171, 0, 0), 
                1px -1px 0 rgb(145, 0, 0);">Ngày bắt đầu và ngày kết thúc không được trùng nhau!</span>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="gio_batdau">Giờ bắt đầu</label>
                            <input type="time" name="giobd" class="form-control" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="gio_ketthuc">Giờ kết thúc</label>
                            <input type="time" name="giokt" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="id_cv">Chọn công việc</label>
                            <select name="id_cv" class="form-control" required>
                                <option value="" disabled selected>-- Chọn công việc --</option>
                                @foreach ($job as $congviec)
                                    <option value="{{ $congviec->id }}">{{ $congviec->tencv }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gio_ketthuc">Nội dung công việc</label>
                            <input type="text" name="noidung" class="form-control" required>
                        </div>
                    
                        <button type="submit" class="btn btn-primary" id="submit-btn">Gửi đăng tuyển</button>
                    </form>
                    <br> <br>
                    <script>
                        function toggleDateInputs() {
                            const thoigianLamViec = document.getElementById('thoigian_lamviec').value;
                            const ngayTuyen = document.getElementById('ngay_tuyen');
                            const ngayBatdauKetthuc = document.getElementById('ngaybd_ketthuc');
                            
                            if (thoigianLamViec === 'trong_ngay') {
                                ngayTuyen.style.display = 'block';
                                ngayBatdauKetthuc.style.display = 'none';
                            } else if (thoigianLamViec === 'nhieu_ngay') {
                                ngayTuyen.style.display = 'none';
                                ngayBatdauKetthuc.style.display = 'block';
                            } else {
                                ngayTuyen.style.display = 'none';
                                ngayBatdauKetthuc.style.display = 'none';
                            }
                        }
                    
                        function validateDates() {
                            const ngayBatdau = document.getElementById('ngaybd').value;
                            const ngayKetthuc = document.getElementById('ngaykt').value;
                            const errorElement = document.getElementById('date-error');
                            const submitButton = document.getElementById('submit-btn');
                    
                            if (ngayBatdau && ngayKetthuc && ngayBatdau === ngayKetthuc) {
                                // Hiển thị lỗi nếu ngày bắt đầu và ngày kết thúc trùng nhau
                                errorElement.style.display = 'block';
                                submitButton.disabled = true;
                            } else {
                                // Ẩn lỗi nếu không có trùng nhau
                                errorElement.style.display = 'none';
                                submitButton.disabled = false;
                            }
                        }
                    </script>
                    
                </div>
                
            </div>
            <div class="col-lg-5" style="margin-top: 20px">
				<div class="single_address">
					<i class="fa fa-map-marker"></i>
					<h4>Địa chỉ</h4>
					<p>190/2T, Đường 30/4-Phường Hưng Lợi</p>
            <p>Quận Ninh Kiều, TPCT</p>
				</div>
				<div class="single_address">
					<i class="fa fa-envelope"></i>
					<h4>Gửi Phản hồi</h4>
					<p>Lovemy@example.com</p>
				</div>
				<div class="single_address">
					<i class="fa fa-phone"></i>
					<h4>Liên Hệ</h4>
					<p>(+84)972456377 </p>
				</div>
				<div class="single_address">
					<i class="fa fa-clock"></i>
					<h4>Giờ làm việc</h4>
					<p>Mon - Fri: 08.00 - 16.00. <br>Sat: 10.00 - 14.00</p>
				</div>					
			</div><!--- END COL --> 
        </div>
    </div>
</div>

@endsection
