<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tumbuhan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_latin', 'nama_lokal', 'deskripsi', 'habitat'];

    public function bahanTumbuhan()
    {
        return $this->hasMany(BahanTumbuhan::class);
    }
}
