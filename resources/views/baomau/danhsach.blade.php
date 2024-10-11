@extends('template')
@section('title')
 Quản lý bảo mẫu
@endsection
@section('content')
  <h6 style="margin-top: -39px;"style="margin-top: -39px;">1. Phân loại bảo mẫu</h6>
  <div class="container" style="margin-left:10px;">
      <a href="{{route('baomau.bmfulltime')}}"><button class="btn btn-primary" style="background-color: white; color: black; height: 80px; width: 150px; font-size:15px; border: 1px solid #91350a">Bảo mẫu <br> Fulltime</button></a>
      <a href=""><button class="btn btn-primary" style="background-color: white; color: black; height: 80px; width: 150px; margin-left: 20px;font-size:15px; border: 1px solid #91350a">Bảo mẫu <br> Partime</button></a>
      <a href=""><button class="btn btn-primary" style="background-color: white; color: black; height: 80px; width: 150px; margin-left: 20px;font-size:15px ; border: 1px solid #91350a">Danh sách <br> ứng tuyển</button></a>
  </div>

  
  {{-- <div class="container" style="margin-left: 13px; margin-top: -35px;">
    <table id="myTable" class="display">
      <thead>
          <tr>
              <th>Họ và Tên</th>
              <th>Số điện thoại</th>
              <th>Địa chỉ</th>
              <th>Giới tính</th>
              <th>Loại bảo mẫu</th>
              <th>Thao tác</th>
          </tr>
      </thead>
      <tbody>
          <tr>
            @foreach ($baomaus as $bm)
              <td>{{$bm->hoten}}</td>
              <td>{{$bm->sdt}}</td>
              <td>{{$bm->diachi}}</td>
              <td>{{$bm->gioitinh}}</td>
              <td>{{$bm->idloai}}</td>
              <td>
                  
              </td>
            @endforeach
          </tr>
          
      </tbody>
    </table>
  </div> --}}
@endsection

