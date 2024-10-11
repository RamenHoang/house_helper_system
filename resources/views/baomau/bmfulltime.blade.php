@extends('template')
@section('title')
    Danh sách bảo mẫu Fulltime 
    <a href="{{route('baomau.thembmft')}}"><button class="btn btn-primary" style="background-color: rgb(252, 255, 255); color:black; border: 1px solid #5a5a5a"> <i class="fa-regular fa-square-plus" style="margin-right: 10px"></i>   Thêm bảo mẫu</button></a>
@endsection
@section('content')
<div class="container" style="font-size: 12px; color:black; font-weight:bold">
    <table id="myTable" class="display" >
        <thead>
            <tr>
                <th>Mã Bảo Mẫu</th>
                <th>Họ & Tên</th>
                <th>Số điện thoại</th>
                <th>CCCD/CMND</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Ngày bắt đầu làm việc</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
                @foreach($baomaus as $bm)
                <tr>
                    <td>BM{{$bm->id}}</td>
                    <td>{{$bm->hoten}}</td>
                    <td>{{$bm->sdt}} </td>
                    <td>{{$bm->cccd}}</td> 
                    <td>{{$bm->gioitinh}}</td>    
                    <td>{{$bm->diachi}}</td>
                    <td>{{($bm->created_at)->format('d/m/y')}}</td>     
                    <td>
                        <a href=""><i class="fa-solid fa-pen" style="margin-left: 10px; font-size: 15px"></i></a>
                        <a href=""><i class="fa-solid fa-trash" style="margin-left: 10px; font-size: 15px"></i></a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection