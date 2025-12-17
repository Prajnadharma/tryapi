<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tumbuhan;
use Illuminate\Http\Request;

class TumbuhanController extends Controller
{
    // GET /api/tumbuhans
    public function index()
    {
        return response()->json(
            Tumbuhan::with('bahanTumbuhan.ramuan:id,nama')->get()
        );
    }

    // GET /api/tumbuhans/{id}
    public function show($id)
    {
        $tumbuhan = Tumbuhan::with([
            'bahanTumbuhan.ramuan.penyakit:id,nama',
            'bahanTumbuhan.ramuan.caraMengolah:id,nama'
        ])->find($id);

        if (!$tumbuhan) {
            return response()->json(['message' => 'Tumbuhan tidak ditemukan'], 404);
        }

        return response()->json($tumbuhan);
    }
}
