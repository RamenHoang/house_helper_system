<?php

namespace App\Http\Controllers;
use App\Models\baomau;
use App\Models\yeucau;
use App\Models\dichvu;


use Illuminate\Http\Request;

class baomauController extends Controller
{
    public function danhsach(){
        $baomaus=baomau::all();
        return view ('baomau.danhsach',compact('baomaus'));
    }
    public function bmfulltime(){
        $baomaus=baomau::all();
        return view ('baomau.bmfulltime',compact('baomaus'));
    }
    public function thembmft(){
        $baomaus=baomau::all();
        return view ('baomau.thembmft',compact('baomaus'));
    }
    public function thembmftpost(Request $request){
        $baomaus=baomau::create([
            'id'=>$request->id,
            'hoten'=>$request->hoten,
            'sdt'=>$request->sdt,
            'diachi'=>$request->diachi,
            'gioitinh'=>$request->gioitinh,
            'cccd'=>$request->cccd,
            'created_at'=>$request->created_at,
        ]);
        return redirect()->route('baomau.bmfulltime');
    }
    public function yeucau(){
        $yc=yeucau::all();
        return view ('baomau.yeucau',compact('yc'));
    }
    public function cv(){
        $cviec=dichvu::all();
        return view ('baomau.dichvu',compact('cviec'));
    }
}
