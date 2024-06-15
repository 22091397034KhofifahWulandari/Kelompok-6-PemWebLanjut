<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaduanUser extends Model
{
    use HasFactory;

    protected $table = 'pengaduanuser';

    protected $fillable = [
        'nik',
        'judul',
        'isi_laporan',
        'foto',
        'tanggal_pengaduan',
        'status',
        'response',
    ];

    public function user()
    {
        return $this->belongsTo(Userpemilu::class, 'nik', 'nik');
    }
}
