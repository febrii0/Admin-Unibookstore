<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User\Penerbit;
use Illuminate\Http\Request;

class PenerbitPageController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan nilai pencarian dari permintaan HTTP
        $search = $request->query('search');

        // Query untuk mengambil data buku sesuai dengan kriteria pencarian
        $penerbit = Penerbit::query();

        // Jika ada pencarian, tambahkan kondisi pencarian ke query
        if ($search) {
            $penerbit->where('nama', 'like', '%' . $search . '%');
        }

        // Ambil data buku
        $penerbits = $penerbit->get();

        // Kirim data books ke tampilan 'Admin.HalamanAdmin' bersama nilai pencarian
        return view('penerbit.penerbitpage', compact('penerbits', 'search'));
    }

    public function create()
    {
        return view('penerbit.addpenerbit');
    }

    public function store(Request $request)
    {
        // Validasi data dari formulir
        $validatedData = $request->validate([
            'id_penerbit' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'telepon' => 'required|numeric'
        ]);

        // Membuat entri baru di dalam database
        $penerbit = new Penerbit();
        $penerbit->id_penerbit = $validatedData['id_penerbit'];
        $penerbit->nama = $validatedData['nama'];
        $penerbit->alamat = $validatedData['alamat'];
        $penerbit->kota = $validatedData['kota'];
        $penerbit->telepon = $validatedData['telepon'];
        $penerbit->save();

        // Redirect ke halaman indeks buku
        return redirect()->route('penerbit.index')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    // public function show($id)
    // {
    //     // Mengambil data buku dari database berdasarkan ID yang diberikan
    //     $bukus = Penerbit::findOrFail($id);

    //     // Memuat view 'Admin.DetailBookAdmin' dan meneruskan data buku ke dalam view
    //     return view('penerbit.addbuku', compact('bukus'));
    // }

    public function edit($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('penerbit.editpenerbit', compact('penerbit'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data buku yang diupdate
        $request->validate([
            'id_penerbit' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'telepon' => 'required|numeric'
        ]);

        // Ambil data penerbit yang ingin diupdate
        $penerbit = Penerbit::findOrFail($id);

        // Perbarui nilai-nilai penerbit
        $penerbit->id_penerbit = $request->id_penerbit;
        $penerbit->nama = $request->nama;
        $penerbit->alamat = $request->alamat;
        $penerbit->kota = $request->kota;
        $penerbit->telepon = $request->telepon;

        // Simpan perubahan
        $penerbit->save();

        return redirect()->route('penerbit.index')->with('success', 'Data penerbit berhasil diperbarui.');
    }

    // public function destroy($id)
    // {
    //     $bukus = Penerbit::findOrFail($id);
    //     $bukus->delete();

    //     return redirect()->route('penerbit.index')->with('success', 'Penerbit berhasil dihapus.');
    // }

    public function destroy($id)
    {
        try {
            $penerbit = Penerbit::findOrFail($id);
            $penerbit->delete();

            return redirect()->route('penerbit.index')->with('success', 'Penerbit berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('penerbit.index')->with('error', 'Gagal menghapus penerbit. Silakan coba lagi.');
        }
    }

}
