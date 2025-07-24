@extends('layouts.admin')
@section('title', 'Data Gejala')

@section('content')
    <a href="{{ route('admin.gejala.create') }}" class="btn btn-primary rounded">Tambah Gejala</a>
    <div class="card mt-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Gejala</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->kode }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>
                                    <a href="{{ route('admin.gejala.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm rounded">Edit</a>
                                    <form action="{{ route('admin.gejala.destroy', $item->id) }}" method="POST"
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
