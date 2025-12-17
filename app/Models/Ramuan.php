<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ramuan extends Model
{
    use HasFactory;

    protected $fillable = ['penyakit_id', 'nama', 'deskripsi', 'pemakaian'];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }

    public function bahanTumbuhan()
    {
        return $this->hasMany(BahanTumbuhan::class);
    }

    // ✅ Tambahkan ini:
    public function tumbuhans()
    {
        return $this->belongsToMany(Tumbuhan::class, 'bahan_tumbuhan')
                    ->withPivot('bagian_digunakan')
                    ->withTimestamps();
    }

    public function caraMengolah()
    {
        return $this->belongsToMany(CaraMengolah::class, 'ramuan_cara')
                    ->withPivot('urutan')
                    ->withTimestamps();
    }
}
