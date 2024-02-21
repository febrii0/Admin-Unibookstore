@extends('layouts.layout')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4"></ol>

    <div class="card mb-4">
        <div class="card-header right-3">
            <i class="fas fa-table"></i>
            Tabel Data Buku

    <div class="col-12 text-end">
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" role="search" action="{{ route('adminpage.index') }}" method="GET">
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
            aria-describedby="btnNavbarSearch" name="search" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit">
            <i class="fas fa-search"></i>
        </button>
    </div>
</form>

    </div>
        </div>
    
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Buku</th>
                        <th>Kategori</th>
                        <th>Nama Buku</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Penerbit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($bukus as $index => $buku)
                    <tr class="table table-striped">
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $buku->id_buku }}</td>
                        <td>{{ $buku->nama_buku }}</td>
                        <td>{{ $buku->kategori }}</td>
                        <td>{{ $buku->penerbit }}</td>
                        <td>{{ $buku->stok }}</td>
                        <td>{{ $buku->harga }}</td>
                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection