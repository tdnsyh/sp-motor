<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RiwayatDiagnosa extends Model
{
    use HasFactory;

    protected $table = 'riwayat_diagnosa';
    protected $fillable = ['user_id', 'gejala_terpilih', 'hasil_diagnosa'];

    protected $casts = [
        'gejala_terpilih' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
