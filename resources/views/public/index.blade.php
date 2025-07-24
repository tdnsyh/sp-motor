@extends('layouts.app')

@section('content')
    {{-- navbar --}}
    @include('partials.navbar')

    <section class="py-4">
        <div class="container">
            <h1>Lorem, ipsum dolor.</h1>
            <div class="mt-3">
                <a href="/diagnosa" class="btn text-info bg-info-subtle rounded">Diagnosa Sekarang</a>
                <a href="/login" class="btn text-warning bg-warning-subtle rounded">Masuk</a>
            </div>
        </div>
    </section>
@endsection
