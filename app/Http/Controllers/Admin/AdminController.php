<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User\Buku;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $buku = Buku::all();

        return view('admin.indexadmin', compact('buku)'));
    }

    public function create()
    {
        //
    }

    public function store($id)
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