@extends('template')
@section('css')
<style>
    .dataTables_filter {
    display: none;
}
.dataTables_info {
    display: none;
}

</style>
@endsection
@section('title')
 Quản lý công việc
@endsection
@section('content')
   <div class="container" style="margin-left: 13px; margin-top: -35px;">
    <table id="myTable" class="display" style="font-size:15px; color:black">
      <thead>
          <tr>
              <th>STT</th>
              <th>Tên công việc</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($cviec as $bm)

          <tr>
              <td>{{$bm->id}}</td>
              <td>{{$bm->tencv}}</td>
             
          </tr>
          @endforeach
          
      </tbody>
    </table>
  </div> -
@endsection

