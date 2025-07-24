@extends('layouts.admin')
@section('title', 'Tambah Data Kerusakan')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.kerusakan.store') }}" method="POST">
                @csrf
                @include('partials.form.kerusakan', ['submit' => 'Simpan'])
            </form>
        </div>
    </div>
@endsection
