<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User\Buku;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();

        return view('admin.index', compact('bukus'));
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