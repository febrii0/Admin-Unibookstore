@extends('layouts/layout')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Add Data Penerbit</h1>
    <ol class="breadcrumb mb-4"></ol>

    <div class="card mb-4">
        <div class="card-header right-3">
    
            <i class="fas fa-table"></i>
            Tambah Data Penerbit
    
        </div>
    
        <div class="card-body">
            <form action="{{ route('penerbitpage.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="id_penerbit" class="form-label">ID Penerbit</label>
                        <input type="text" class="form-control" id="id_penerbit" name="id_penerbit">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Penerbit</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                      </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="number" class="form-control" id="telepon" name="telepon">
                    </div>
                    <div class="d-flex">
                      <a href="{{ route('penerbitpage.index') }}" class="btn btn-secondary">Kembali</a>
                      <button type="submit" class="btn btn-primary ml-2">Simpan</button>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection