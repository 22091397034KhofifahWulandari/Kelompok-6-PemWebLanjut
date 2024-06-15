<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Pelaporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'kegiatan', 'metode', 'tempat', 'tanggal', 'jumlah_peserta', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
