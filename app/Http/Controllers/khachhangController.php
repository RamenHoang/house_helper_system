<?php

namespace App\Http\Controllers;
use App\Models\dichvu;
use App\Models\yeucau;
use App\Models\dangtuyen;
use App\Models\ungtuyen;
use App\Models\baomau;
use Illuminate\Support\Facades\Auth;  


use Illuminate\Http\Request;

class khachhangController extends Controller
{
    public function danhsach(){
        $job = dichvu::all();
        return view ('khachhang.trongtre',compact('job'));
    }

    public function show()
    {
        $job = dichvu::all();
        return view('khachhang.congviec.trongtretainha',compact('job'));
    }
    public function yeucau(){
        $yc=yeucau::all();
        return view ('baomau.yeucau',compact('yc'));
    }
    public function themyeucaupost(Request $request){
        $req=yeucau::create([
            'id'=>$request->id,
            'hoten'=>$request->hoten,
            'email'=>$request->email,
            'chude'=>$request->chude,
            'noidung'=>$request->noidung,   
            'created_at'=>$request->created_at,
        ]);
        return redirect()->route('khachhang.danhsach');
    }

    public function thongtincanhan(){
        $id = $request -> id;
        $thongtin = User::find($id);
        $thongtin->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'cccd'=>$request->cccd,
            'sdt'=>$request->sdt,
            'gioitinh'=>$request->gioitinh,
        ]); 
        return redirect()->route('trangchu.TrangChu');
    }
    public function dangxuat(){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route('login.dangnhap');
    }

   public function dangtuyen(){
        $job = dichvu::all();
        return view ('khachhang.dangtuyen',compact('job'));
   }
   // Lưu thông tin đăng tuyển
   public function themdangtuyen(Request $request)
   {
       // Lấy ID của khách hàng (user) hiện tại
       $id_kh = Auth::id();

       // Tạo bản ghi đăng tuyển mới
       dangtuyen::create([
           'id_kh' => $id_kh,  // ID khách hàng (đã đăng nhập)
           'id_cv' => $request->id_cv,  // ID công việc từ form
           'ngaybd' => $request->ngaybd,
           'ngaykt' => $request->ngaykt,
           'giobd' => $request->giobd,
           'giokt' => $request->giokt,
            'noidung'=>$request->noidung,
       ]);

       return redirect()->route('khachhang.dangtuyen')->with('success', 'Đăng tuyển thành công');
   }
   public function ungtuyen(Request $request) {
        $request->validate([
            'tencv' => 'required|exists:dichvu,id',
        ]);
    

        // Xử lý giờ nếu cần
        $job = dichvu::find($request->tencv);
        $job = dichvu::all();
        $dangtuyen = dangtuyen::where('id_cv', $request->tencv)->first();

        return redirect()->route('khachhang.ungtuyen')->with([
            'job' => $job,
            'dangtuyen' => $dangtuyen,
        ]);
}


public function trangungtuyen(){
    $job = dichvu::all();
    $dt = dangtuyen::all();
    return view ('khachhang.ungtuyen', compact('job','dt'));
}

public function getGioById($id) {
    // Tìm dịch vụ theo ID
    $job = dichvu::find($id);
    
    // Lấy giờ từ bảng dangtuyen dựa trên id_cv
    if ($job) {
        $dangtuyen = dangtuyen::where('id_cv', $id)->first(); // Lấy thông tin đầu tiên
        if ($dangtuyen) {
            return response()->json([
                'giobd' => $dangtuyen->giobd,
                'giokt' => $dangtuyen->giokt,
            ]);
        }
    }
    
    return response()->json(['giobd' => null, 'giokt' => null]);
}



}
