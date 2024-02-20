<?php

namespace App\Http\Controllers\Admin;

use App\Models\User\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengadaanController extends Controller
{
    public function index()
    {
        $bookWithLowestStock = Buku::orderBy('stok')->first();

        return view('admin.adminpengadaan', compact('bookWithLowestStock'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
