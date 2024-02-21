@extends('layouts/layout')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Add Data Buku</h1>
    <ol class="breadcrumb mb-4"></ol>

    <div class="card mb-4">
        <div class="card-header right-3">
    
            <i class="fas fa-table"></i>
            Tambah Data Buku
    
        </div>
    
        <div class="card-body">
            <form action="{{ route('adminpage.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="id_buku" class="form-label">ID Buku</label>
                        <input type="text" class="form-control" id="id_buku" name="id_buku">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori">
                      </div>
                    <div class="mb-3">
                        <label for="nama_buku" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control" id="nama_buku" name="nama_buku">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok">
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit">
                    </div>
                    <div class="d-flex">
                      <a href="{{ route('adminpage.index') }}" class="btn btn-secondary">Kembali</a>
                      <button type="submit" class="btn btn-primary ml-2">Simpan</button>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection