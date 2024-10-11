@extends('template')
@section('title')
 Quản lý bảo mẫu
@endsection
@section('content')


  <h6 style="margin-top: 20px;">Danh sách yêu cầu</h6><br><br>
  <div class="container" style="margin-left: 13px; margin-top: -35px;">
    <table id="myTable" class="display">
      <thead>
          <tr>
              <th>Họ và Tên</th>
              <th>Email</th>
              <th>Chủ đề</th>
              <th>Nội dung</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($yc as $bm)
          <tr>
              <td>{{$bm->hoten}}</td>
              <td>{{$bm->email}}</td>
              <td>{{$bm->chude}}</td>
              <td>
                {{$bm->noidung}}
              </td>
          </tr>
          @endforeach
          
      </tbody>
    </table>
  </div> 
@endsection

