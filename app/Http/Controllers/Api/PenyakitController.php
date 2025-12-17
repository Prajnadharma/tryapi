<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    // GET /api/penyakits
    public function index()
    {
        return response()->json(
            Penyakit::with('ramuans:id,penyakit_id,nama,deskripsi,pemakaian')->get()
        );
    }

    // GET /api/penyakits/{id}
    public function show($id)
    {
        $penyakit = Penyakit::with([
            'ramuans.tumbuhans:id,nama,deskripsi',
            'ramuans.caraMengolah:id,nama,deskripsi'
        ])->find($id);

        if (!$penyakit) {
            return response()->json(['message' => 'Penyakit tidak ditemukan'], 404);
        }

        return response()->json($penyakit);
    }
}
