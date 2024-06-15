<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Import HasFactory
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'portofolio_caleg'; // Nama tabel yang digunakan
    protected $fillable = [
        'user_id',
        'jabatan',
        'foto',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_tanggal_lahir',
        'partai',
        'alamat',
        'kota',
        'provinsi',
        'kode_pos',
        'visi_misi',
        'pendidikan',
        'pengalaman_kerja',
        'organisasi',
        'prestasi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
