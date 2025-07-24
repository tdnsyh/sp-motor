<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;
    protected $table = 'kerusakan';
    protected $fillable = ['kode', 'nama', 'deskripsi', 'solusi'];

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }
}
