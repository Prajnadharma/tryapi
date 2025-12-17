<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ramuan;

class RamuanController extends Controller
{
    // GET /api/ramuans
    public function index()
    {
        return response()->json(
            Ramuan::with([
                'penyakit:id,nama',
                'tumbuhans:id,nama_umum,nama_latin,bagian_umum',
                'caraMengolah:id,nama,deskripsi'
            ])->select('id', 'penyakit_id', 'nama', 'deskripsi', 'pemakaian')->get()
        );
    }

    // GET /api/ramuans/{id}
    public function show($id)
    {
        $ramuan = Ramuan::with([
            'penyakit:id,nama',
            'tumbuhans:id,nama_umum,nama_latin,bagian_umum',
            'caraMengolah:id,nama,deskripsi'
        ])->find($id);

        if (!$ramuan) {
            return response()->json(['message' => 'Ramuan tidak ditemukan'], 404);
        }

        return response()->json($ramuan);
    }
}
