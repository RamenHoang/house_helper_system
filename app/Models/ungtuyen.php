<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ungtuyen extends Model
{
    use HasFactory;
    protected $table="ungtuyen";
    protected $fillable=[
        'id',
        'id_user',
        'id_dangtuyen',
        'tienmongmuon',
        'created_at',
        'updated_at',
    ];

    public function nguoidung()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    
    public function dangtuyen()
    {
        return $this->belongsTo(dangtuyen::class, 'id_dangtuyen', 'id');
    }
}
