@extends('layouts/layout')
@section('content')
    <div class="content">
      <div class="row">
        <div class="col">
          <h3 class="text-center"><b>Edit Data Penerbit</b></h3>
        </div>
      </div>
      <div class="row pb-5">
        <div class="col-md-10 mx-auto">
          <div class="card">
            <div class="card-body">
                <form action="{{ route('penerbitpage.update', ['penerbitpage' => $penerbit->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="id_penerbit" class="form-label">ID Penerbit</label>
                        <input type="text" class="form-control" id="id_penerbit" name="id_penerbit" value="{{ $penerbit->id_penerbit }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Penerbit</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $penerbit->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $penerbit->alamat }}">
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" value="{{ $penerbit->kota }}">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="number" class="form-control" id="telepon" name="telepon" value="{{ $penerbit->telepon }}">
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('penerbitpage.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary ml-2">Simpan</button>
                    </div>
                </form>
                
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection