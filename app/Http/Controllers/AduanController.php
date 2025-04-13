<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aduan;
use Illuminate\Support\Str;

class AduanController extends Controller
{
    // Form input aduan (user)
    public function create()
    {
        return view('create');
    }

    // Simpan aduan ke database
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

        do {
            $ticket = 'TKT-' . strtoupper(Str::random(6));
        } while (Aduan::where('ticket_number', $ticket)->exists());
        
        $validated['ticket_number'] = $ticket;
        
        $validated['kategori'] = $request->kategori;

        // dd($validated); (digunakan untuk check data yang diinput)
        // dd($request->kategori)

        Aduan::create($validated);

        return redirect('/')->with('success', 'Aduan berhasil dikirim!');
    }

    // Halaman list aduan (admin)
    public function index()
    {
    $aduans = Aduan::all(); // ambil semua data dari database
    return view('admin.index', compact('aduans')); // kirim ke view
    }

    // Detail aduan (admin)
    public function show($id)
    {
        $aduan = Aduan::findOrFail($id);
        return view('admin.show', compact('aduan'));
    }

    // Balas aduan (admin)
    public function balas(Request $request, $id)
    {
        $request->validate(['balasan' => 'required']);

        $aduan = Aduan::findOrFail($id);
        $aduan->balasan = $request->balasan;
        $aduan->save();

        return redirect()->back()->with('success', 'Balasan berhasil dikirim!');
    }

    // Hapus aduan (admin)
    public function destroy($id)
    {
        $aduan = Aduan::findOrFail($id);
        $aduan->delete();

        return redirect('/admin/aduan')->with('success', 'Aduan berhasil dihapus!');
    }

    // (Opsional) List aduan untuk user
    public function userIndex()
    {
        $aduans = Aduan::latest()->get(); // nanti bisa disesuaikan untuk user tertentu
        return view('user.index', compact('aduans'));
    }
}
