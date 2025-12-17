<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RamuanCara extends Model
{
    use HasFactory;

    protected $table = 'ramuan_cara';

    protected $fillable = ['ramuan_id', 'cara_mengolah_id', 'urutan'];
}
