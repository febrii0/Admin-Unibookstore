    @extends('layouts/layout')
    @section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Admin</h1>
        <ol class="breadcrumb mb-4"></ol>

        <div class="card mb-4">
            <div class="card-header right-3">

                <i class="fas fa-table"></i>
                Tabel Pengolahan Data Buku
            </div>
            
            <div class="card-body">
                
                <table class="table table-striped">
                    <div>
                         
                        <a type="button" class="btn btn-outline-primary col-md-12"
                        href="{{ route('adminpage.create')}}">Add</a>
                        
                    </div>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Buku</th>
                            <th>Kategori</th>
                            <th>Nama Buku</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Penerbit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($bukus as $index => $buku)
                            <tr class="table table-striped">
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $buku->id_buku }}</td>
                            <td>{{ $buku->kategori }}</td>
                            <td>{{ $buku->nama_buku }}</td>
                            <td>{{ $buku->harga }}</td>
                            <td>{{ $buku->stok }}</td>
                            <td>{{ $buku->penerbit }}</td>
                            <td class="text-center">
                                <div>
                                    <a type="button" class="btn btn-outline-secondary"
                                        href="{{ route('adminpage.edit', $buku->id) }}">Edit</a>

                                    <form method="POST" action="{{ route('adminpage.destroy', $buku->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    @endsection