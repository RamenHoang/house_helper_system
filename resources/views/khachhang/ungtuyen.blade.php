@extends('khachhang.dt')
@section('css')
@endsection
@section('dangtuyen')
<div class="container">
    <div class="row" style="margin-top: 130px;">
        <div class="col-md-5" style="border: 1px solid #d7d7d7">
            <div class="d-flex justify-content-center mt-3">
                <h2>ĐĂNG KÝ CÔNG VIỆC</h2>
            </div>
            <form action="">
                <div class="form-group">
                    <label for="">Chọn loại công việc <span class="text-danger">*</span></label>
                    <select name="id_cv" class="form-control" id="job-select" required>
                        <option value="" disabled selected>-- Chọn công việc --</option>
                        @foreach ($job as $congviec)
                            <option value="{{ $congviec->id }}">{{ $congviec->tencv }}</option>
                        @endforeach
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="">Chọn thời gian <span class="text-danger">*</span></label> <br>
                    <div id="time-buttons"></div> <!-- Nơi hiển thị các button thời gian -->
                    <input type="hidden" name="thoigian_id" id="thoigian_id" value="">
                </div>
            
                <div class="form-group">
                    <label for="">Giá cả mong muốn (nếu cần) <span class="text-danger">*</span></label>
                    <input type="text" class="form-control">
                </div>
                <button class="btn btn-primary">Đăng ký</button>
            </form>
        <script>
            document.getElementById('job-select').addEventListener('change', function() {
    const selectedJobId = this.value;

    // Gọi API để lấy thời gian theo ID công việc
    fetch(`/khachhang/get-gio/${selectedJobId}`)
        .then(response => response.json())
        .then(data => {
            const timeButtons = document.getElementById('time-buttons');
            const timeError = document.getElementById('time-error');

            if (data.giobd && data.giokt) {
                // Hiển thị nút chọn thời gian nếu có dữ liệu
                timeButtons.innerHTML = `
                    <button type="button" class="btn btn-info" onclick="chonThoiGian('${data.giobd} - ${data.giokt}')">
                        Giờ làm: ${data.giobd} - ${data.giokt}
                    </button>
                `;
                timeError.style.display = 'none'; // Ẩn thông báo lỗi nếu có dữ liệu
            } else {
                // Xóa các nút và hiển thị thông báo lỗi nếu không có dữ liệu
                timeButtons.innerHTML = '';
                timeError.style.display = 'block'; // Hiển thị thông báo lỗi màu đỏ
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
});

function chonThoiGian(thoiGian) {
    // Cập nhật giá trị của trường ẩn với giờ đã chọn
    document.getElementById('thoigian_id').value = thoiGian;

    // Hiển thị thông báo hoặc cập nhật UI khác nếu cần
    alert("Bạn đã chọn thời gian: " + thoiGian);
}

            </script>            
        </div>
        <div class="col-md-7">
            <img src="{{asset('./assets/img/services.jpg')}}" alt="" style="width: 653px;">
        </div>
    </div>
</div><br>
@endsection