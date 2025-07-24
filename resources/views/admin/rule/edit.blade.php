@extends('layouts.admin')
@section('title', 'Edit Data Rule')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.rule.update', $kode_rule) }}" method="POST">
                @csrf
                @method('PUT')
                @include('partials.form.rule', [
                    'submit' => 'Update',
                ])
            </form>
        </div>
    </div>
@endsection
