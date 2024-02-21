@extends('layouts/layout')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Pengadaan</h1>
    <ol class="breadcrumb mb-4"></ol>

<div class="card mb-4">
    <div class="card-header right-3">

        <i class="fas fa-table"></i>
        Tabel Data Buku Terbatas
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Buku</th>
                    <th>Penerbit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <tr>
                    <td>{{ $bookWithLowestStock->nama_buku }}</td>
                    <td>{{ $bookWithLowestStock->penerbit }}</td>
                  </tr>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
              
@endsection