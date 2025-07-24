@extends('layouts.admin')
@section('title', 'Edit Data Gejala')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.gejala.update', $gejala->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('partials.form.gejala', [
                    'submit' => 'Update',
                    'gejala' => $gejala,
                ])
            </form>
        </div>
    </div>
@endsection
