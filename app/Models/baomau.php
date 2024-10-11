<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baomau extends Model
{
    const baomau = 1;
    const khachhang = 2;
    const admin = 3;
    use HasFactory;
    protected $table="baomau";
    protected $fillable=[
        'id',
        'hoten',
        'email',
        'sdt',
        'diachi',
        'idloai',
        'cccd',
        'gioitinh',
        'password',
        'created_at',
        'updated_at',
    ];

    public function loaibaomau()
    {
        return $this->belongsTo(loaibaomau::class, 'idloai', 'idloai');
    }
}
