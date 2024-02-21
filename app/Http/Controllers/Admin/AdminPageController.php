<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User\Buku;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan nilai pencarian dari permintaan HTTP
        $search = $request->query('search');

        // Query untuk mengambil data buku sesuai dengan kriteria pencarian
        $buku = Buku::query();

        // Jika ada pencarian, tambahkan kondisi pencarian ke query
        if ($search) {
            $buku->where('nama_buku', 'like', '%' . $search . '%');
        }

        // Ambil data buku
        $bukus = $buku->get();

        // Kirim data books ke tampilan 'Admin.HalamanAdmin' bersama nilai pencarian
        return view('admin.adminpage', compact('bukus', 'search'));
    }

    public function create()
    {
        return view('admin.addbuku');
    }

    public function store(Request $request)
    {
        // Validasi data dari formulir
        $validatedData = $request->validate([
            'id_buku' => 'required',
            'nama_buku' => 'required',
            'kategori' => 'required',
            'penerbit' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        // Membuat entri baru di dalam database
        $buku = new Buku();
        $buku->id_buku = $validatedData['id_buku'];
        $buku->nama_buku = $validatedData['nama_buku'];
        $buku->kategori = $validatedData['kategori'];
        $buku->penerbit = $validatedData['penerbit'];
        $buku->stok = $validatedData['stok'];
        $buku->harga = $validatedData['harga'];
        $buku->save();

        // Redirect ke halaman indeks buku
        return redirect()->route('admin.index')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    // public function show($id)
    // {
    //     // Mengambil data buku dari database berdasarkan ID yang diberikan
    //     $bukus = Buku::findOrFail($id);

    //     // Memuat view 'Admin.DetailBookAdmin' dan meneruskan data buku ke dalam view
    //     return view('admin.addbuku', compact('bukus'));
    // }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('admin.editbuku', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data buku yang diupdate
        $request->validate([
            'id_buku' => 'required',
            'nama_buku' => 'required',
            'kategori' => 'required',
            'penerbit' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        // Ambil data buku yang ingin diupdate
        $buku = Buku::findOrFail($id);

        // Perbarui nilai-nilai buku
        $buku->id_buku = $request->id_buku;
        $buku->nama_buku = $request->nama_buku;
        $buku->kategori = $request->kategori;
        $buku->penerbit = $request->penerbit;
        $buku->stok = $request->stok;
        $buku->harga = $request->harga;

        // Simpan perubahan
        $buku->save();

        return redirect()->route('admin.index')->with('success', 'Data buku berhasil diperbarui.');
    }

    // public function destroy($id)
    // {
    //     $bukus = Buku::findOrFail($id);
    //     $bukus->delete();

    //     return redirect()->route('admin.index')->with('success', 'Buku berhasil dihapus.');
    // }

    public function destroy($id)
    {
        try {
            $buku = Buku::findOrFail($id);
            $buku->delete();

            return redirect()->route('admin.index')->with('success', 'Buku berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.index')->with('error', 'Gagal menghapus buku. Silakan coba lagi.');
        }
    }

}
