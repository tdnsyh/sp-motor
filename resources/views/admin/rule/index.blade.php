@extends('layouts.admin')
@section('title', 'Data Rule')

@section('content')
    <a href="{{ route('admin.rule.create') }}" class="btn btn-primary rounded">Tambah Rule</a>
    <div class="mt-3">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($rules as $kode_rule => $group)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-info text-white">
                            <strong>{{ $kode_rule }}</strong>
                        </div>
                        <div class="card-body">
                            <p><strong>Kerusakan:</strong> {{ $group->first()->kerusakan->kode }} -
                                {{ $group->first()->kerusakan->nama }}</p>

                            <p><strong>Gejala:</strong></p>
                            <ul>
                                @foreach ($group as $r)
                                    <li>{{ $r->gejala->kode }} - {{ $r->gejala->nama }}</li>
                                @endforeach
                            </ul>

                            <a href="{{ route('admin.rule.edit', $kode_rule) }}"
                                class="btn btn-warning btn-sm rounded">Edit</a>
                            <form action="{{ route('admin.rule.destroy', $kode_rule) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm rounded">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
