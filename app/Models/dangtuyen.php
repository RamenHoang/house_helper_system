<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dangtuyen extends Model
{
    use HasFactory;
    protected $table="dangtuyen";
    protected $fillable=[
        'id',
        'id_kh',
        'id_cv',
        'ngaybd',
        'ngaykt',
        'giobd',
        'giokt',
        'gio',
        'created_at',
        'updated_at',
        'noidung',
    ];
    // Quan hệ với bảng User (Khách hàng)
    public function khachhang()
    {
        return $this->belongsTo(User::class, 'id_kh');
    }

    // Quan hệ với bảng DichVu (Công việc)
    public function dichvu()
    {
        return $this->belongsTo(DichVu::class, 'id_cv');
    }
}
