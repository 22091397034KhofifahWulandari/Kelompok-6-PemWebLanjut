<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class UserPemilu extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'userpemilu';

    protected $fillable = [
        'username',
        'nama_lengkap',
        'nik',
        'tanggal_lahir',
        'alamat',
        'password',
        'foto_ktp',
       'profile_picture', // tambahkan kolom profile_picture di sini
        
        
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function pengaduanusers()
    {
        return $this->hasMany(PengaduanUser::class, 'nik', 'nik');
    }
}
