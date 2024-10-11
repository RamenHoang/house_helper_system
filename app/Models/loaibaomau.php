<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaibaomau extends Model
{
    use HasFactory;
    protected $table="loaibaomau";
    protected $fillable=[
        'idloai',
        'tenloai',
        'created_at',
        'updated_at',
    ];

    public function baomau()
    {
        return $this->hasMany(baomau::class, 'idloai', 'idloai');
    }
}
