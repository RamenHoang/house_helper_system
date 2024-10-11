<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    const baomau = 1;
    const khachhang = 2;
    const admin = 3;
    protected $fillable = [
        'id',
        'name',
        'sdt',
        'diachi',
        'cccd',
        'gioitinh',
        'congviec',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'role_id',
    ];

     // Quan hệ một khách hàng có nhiều lần đăng tuyển
     public function dangtuyens()
     {
         return $this->hasMany(DangTuyen::class, 'id_kh');
     }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
