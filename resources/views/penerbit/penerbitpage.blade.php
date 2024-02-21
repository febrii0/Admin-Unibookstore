    @extends('layouts/layout')
    @section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Penerbit</h1>
        <ol class="breadcrumb mb-4"></ol>

        <div class="card mb-4">
            <div class="card-header right-3">

                <i class="fas fa-table"></i>
                Tabel Pengolahan Data Penerbit
            </div>
            
            <div class="card-body">
                
                <table class="table table-striped">
                    <div>
                         
                        <a type="button" class="btn btn-outline-primary col-md-12"
                        href="{{ route('penerbitpage.create')}}">Add</a>
                        
                    </div>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Penerbit</th>
                            <th>Nama Penerbit</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Telepon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($penerbits as $index => $penerbit)
                            <tr class="table table-striped">
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $penerbit->id_penerbit }}</td>
                            <td>{{ $penerbit->nama }}</td>
                            <td>{{ $penerbit->alamat }}</td>
                            <td>{{ $penerbit->kota }}</td>
                            <td>{{ $penerbit->telepon }}</td>
                            <td class="text-center">
                                <div>
                                    <a type="button" class="btn btn-outline-secondary"
                                        href="{{ route('penerbitpage.edit', $penerbit->id) }}">Edit</a>

                                    <form method="POST" action="{{ route('penerbitpage.destroy', $penerbit->id) }}">
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