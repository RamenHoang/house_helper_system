<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yeucau extends Model
{
    use HasFactory;
    protected $table="yeucau";
    protected $fillable=[
        'id',
        'hoten',
        'email',
        'chude',
        'noidung',
        'created_at',
        'updated_at',
    ];
}
