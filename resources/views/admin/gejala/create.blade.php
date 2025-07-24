@extends('layouts.admin')
@section('title', 'Tambah Data Gejala')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.gejala.store') }}" method="POST">
                @csrf
                @include('partials.form.gejala', ['submit' => 'Simpan'])
            </form>
        </div>
    </div>
@endsection
