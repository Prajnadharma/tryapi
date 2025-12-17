<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CaraMengolah;
use Illuminate\Http\Request;

class CaraMengolahController extends Controller
{
    // GET /api/cara-mengolah
    public function index()
    {
        return response()->json(
            CaraMengolah::with('ramuans:id,nama,deskripsi')->get()
        );
    }

    // GET /api/cara-mengolah/{id}
    public function show($id)
    {
        $cara = CaraMengolah::with([
            'ramuans.penyakit:id,nama',
            'ramuans.tumbuhans:id,nama'
        ])->find($id);

        if (!$cara) {
            return response()->json(['message' => 'Cara mengolah tidak ditemukan'], 404);
        }

        return response()->json($cara);
    }
}
