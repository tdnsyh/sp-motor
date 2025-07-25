@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <section class="py-4">
        <div class="container">
            <h1>Form Diagnosa Kerusakan Motor Honda Beat</h1>
            <div class="mt-3">
                <a href="/diagnosa/panduan" class="btn text-info bg-info-subtle rounded">Baca Panduan</a>
            </div>
            <div class="mt-3">
                <form method="POST" action="{{ route('diagnosa.hasil') }}">
                    @csrf
                    @foreach ($gejalas as $index => $gejala)
                        <div class="mb-3">
                            <label class="fw-bold d-block mb-2">{{ $index + 1 }}. Apakah
                                {{ strtolower($gejala->nama) }}?</label>
                            <div class="d-flex gap-2">
                                <input type="radio" class="btn-check" name="gejala[{{ $gejala->id }}]" value="1"
                                    id="yes{{ $gejala->id }}">
                                <label class="btn btn-outline-success" for="yes{{ $gejala->id }}">
                                    <i class="bi bi-check-circle"></i> Ya
                                </label>

                                <input type="radio" class="btn-check" name="gejala[{{ $gejala->id }}]" value="0"
                                    id="no{{ $gejala->id }}" checked>
                                <label class="btn btn-outline-danger" for="no{{ $gejala->id }}">
                                    <i class="bi bi-x-circle"></i> Tidak
                                </label>
                            </div>
                        </div>
                    @endforeach

                    <div class="">
                        <button type="submit" class="btn btn-primary">Diagnosa Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
@endpush
