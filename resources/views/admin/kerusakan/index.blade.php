@extends('layouts.admin')
@section('title', 'Data Kerusakan')

@section('content')
    <a href="{{ route('admin.kerusakan.create') }}" class="btn btn-primary rounded">Tambah Kerusakan</a>
    <div class="card mt-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Kerusakan</th>
                            <th>Deskripsi</th>
                            <th>Solusi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->kode }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>{{ $item->solusi }}</td>
                                <td>
                                    <a href="{{ route('admin.kerusakan.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm rounded">Edit</a>
                                    <form action="{{ route('admin.kerusakan.destroy', $item->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm rounded">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
