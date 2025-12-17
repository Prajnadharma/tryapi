<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanTumbuhan extends Model
{
    use HasFactory;

    protected $table = 'bahan_tumbuhan'; // ✅ pastikan sama persis dengan di DB

    protected $fillable = ['ramuan_id', 'tumbuhan_id', 'bagian_digunakan', 'jumlah'];

    public function ramuan()
    {
        return $this->belongsTo(Ramuan::class);
    }

    public function tumbuhan()
    {
        return $this->belongsTo(Tumbuhan::class);
    }
}
