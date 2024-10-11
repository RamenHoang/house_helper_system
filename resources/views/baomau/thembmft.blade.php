@extends('template')
@section('title')
    Thêm bảo mẫu Fulltime
@endsection
@section('content')
<form action="{{route('baomau.thembmftpost')}}" method="POST">
    @csrf
        <div class="row">
            <div class="col-md-6" >
                <div class="form-group" style="font-size:15px; color: black">
                    <label for="">Họ và tên</label>
                    <input name="hoten" type="text" class="form-control" placeholder="Thêm Họ và tên bảo mẫu" style="margin-top:-10px">
                </div>
            </div>
            <div class="col-md-6" >
                <div class="form-group" style="font-size:15px; color: black">
                    <label for="">Số điện thoại</label>
                    <input name="sdt" type="text" class="form-control" placeholder="Thêm số điện thoại bảo mẫu" style="margin-top:-10px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" >
                <div class="form-group" style="font-size:15px; color: black">
                    <label for="">Địa chỉ</label>
                    <input name="diachi" type="text" class="form-control" placeholder="Thêm địa chỉ bảo mẫu" style="margin-top:-10px">
                </div>
            </div>
            <div class="col-md-6" >
                <div class="form-group" style="font-size:15px; color: black">
                    <label for="">CCCD/CMND</label>
                    <input name="cccd" type="text" class="form-control" placeholder="Thêm CCCD/CMND bảo mẫu" style="margin-top:-10px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" >
                <div class="form-group" style="font-size:15px; color: black">
                    <label for="">Địa chỉ</label>
                    <input name="diachi" type="text" class="form-control" placeholder="Thêm địa chỉ bảo mẫu" style="margin-top:-10px">
                </div>
            </div>
            <div class="col-md-6" >
                <div class="form-group" style="font-size:15px; color: black">
                    <label for="">Giới tính</label>
                    <input name="gioitinh" type="text" class="form-control" placeholder="Thêm giới tính bảo mẫu" style="margin-top:-10px">
                </div>
            </div>
        </div>
        <div class="row">
            <button class="btn btn-primary" type="submit" style="height: 35px; margin-left:15px; font-size:15px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif" >Thêm</button>
    </div>
</form>
@endsection