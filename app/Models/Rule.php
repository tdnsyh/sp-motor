<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $table = 'rule';
    protected $fillable = ['kode_rule', 'kerusakan_id', 'gejala_id'];

    public function kerusakan()
    {
        return $this->belongsTo(Kerusakan::class);
    }

    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }
}
