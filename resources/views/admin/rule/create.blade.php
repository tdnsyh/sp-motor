@extends('layouts.admin')
@section('title', 'Tambah Data Rule')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.rule.store') }}" method="POST">
                @csrf
                @include('partials.form.rule', [
                    'submit' => 'Simpan',
                    'showKodeRule' => true,
                ])
            </form>
        </div>
    </div>
@endsection
