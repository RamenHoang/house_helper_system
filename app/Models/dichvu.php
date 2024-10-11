<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dichvu extends Model
{
    use HasFactory;
    protected $table="dichvu";
    protected $fillable=[
        'id',
        'tencv',
        'created_at',
        'updated_at',
    ];
    
    // Quan hệ một công việc có thể thuộc về nhiều lần đăng tuyển
    public function dangtuyens()
    {
        return $this->hasMany(DangTuyen::class, 'id_cv');
    }
}
