@extends('layouts.admin')
@section('title', 'Edit Data Kerusakan')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.kerusakan.update', $kerusakan->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('partials.form.kerusakan', [
                    'submit' => 'Update',
                    'kerusakan' => $kerusakan,
                ])
            </form>
        </div>
    </div>
@endsection
