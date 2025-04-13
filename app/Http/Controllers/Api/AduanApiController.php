<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aduan;

class AduanApiController extends Controller
{
    public function index()
    {
        return response()->json(Aduan::all());
    }

    public function show($id)
    {
        $aduan = Aduan::find($id);
        if (!$aduan) return response()->json(['message' => 'Not Found'], 404);
        return response()->json($aduan);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'nim' => 'required',
            'email' => 'required|email',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $validated['ticket_number'] = 'TKT-' . strtoupper(\Illuminate\Support\Str::random(6));
        $validated['kategori'] = $request->kategori;

        $aduan = Aduan::create($validated);

        return response()->json($aduan, 201);
    }

    // Tambahkan update dan destroy jika perlu
}
