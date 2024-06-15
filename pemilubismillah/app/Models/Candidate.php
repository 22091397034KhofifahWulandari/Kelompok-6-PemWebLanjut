<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'position',
        'formulir',
        'ktp',
        'ijazah',
        'surat_pernyataan',
        'surat_bebas_narkoba'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
