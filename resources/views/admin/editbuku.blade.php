@extends('layouts/layout')
@section('content')
    <div class="content">
      <div class="row">
        <div class="col">
          <h3 class="text-center"><b>Edit Data Buku</b></h3>
        </div>
      </div>
      <div class="row pb-5">
        <div class="col-md-10 mx-auto">
          <div class="card">
            <div class="card-body">
                <form action="{{ route('adminpage.update', ['adminpage' => $buku->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="id_buku" class="form-label">ID Buku</label>
                        <input type="text" class="form-control" id="id_buku" name="id_buku" value="{{ $buku->id_buku }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama_buku" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control" id="nama_buku" name="nama_buku" value="{{ $buku->nama_buku }}">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $buku->kategori }}">
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}">
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="{{ $buku->stok }}">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ $buku->harga }}">
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('adminpage.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary ml-2">Simpan</button>
                    </div>
                </form>
                
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection