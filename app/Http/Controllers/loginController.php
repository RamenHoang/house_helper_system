<?php

namespace App\Http\Controllers;
use App\Models\baomau;
use App\Models\User;
use Illuminate\Support\Facades\Auth;  

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function dangky(){
        return view('login.dangky');
    }
    public function dangnhap(){
        return view ('login.dangnhap');
    }
    public function dangkypost(Request $request){
        // Kiểm tra dữ liệu nhập vào
    $request->validate([
        'role_id' => 'required|in:1,2', // Chỉ cho phép giá trị 1 hoặc 2
    ]);
        $nguoidung = User::create([
            'name'=> $request ->hoten,
            'email' => $request -> email,
            'sdt' => $request -> sdt,
            'cccd' => $request -> cccd,
            'diachi' => $request -> diachi,
            'congviec' => $request -> congviec,
            // bcrypt: mã hóa mật khẩu, chuyển chữ -> mã băm
            'password' =>bcrypt($request -> password) ,
            'role_id'=>$request->role_id,
        ]);
        return redirect()->route('login.dangnhap');
    }
    public function dangnhappost(Request $request){
            // Thử đăng nhập với email và mật khẩu từ request
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                // Kiểm tra vai trò của người dùng sau khi đăng nhập thành công
                if(auth()->user()->role_id == baomau::baomau){
                    // Chuyển hướng khi đăng nhập thành công với vai trò "baomau"
                    return redirect()->route('khachhang.danhsach');
                    // return 1;
                }
                if(auth()->user()->role_id == baomau::khachhang){
                    // Chuyển hướng khi đăng nhập thành công với vai trò "baomau"
                    return redirect()->route('khachhang.danhsach');
                    // return 1;
                }
                else {
                    // Trường hợp không phải vai trò "baomau"
                    // return redirect()->route('khachhang.danhsach');
                    return heeee;
                }
            } else {
                // Trường hợp đăng nhập thất bại
                // return redirect()->back()->with('error', 'Đăng nhập thất bại');
                return 2;
            }
        }
        
}
