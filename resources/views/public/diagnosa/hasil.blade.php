@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <section class="py-4">
        <div class="container">
            <h3>Hasil Diagnosa</h3>

            @if ($hasil->isEmpty())
                <div class="alert alert-warning">Tidak ditemukan kerusakan berdasarkan gejala yang dipilih.</div>
            @else
                <p>Sistem menemukan <strong>{{ $hasil->count() }}</strong> kemungkinan kerusakan berdasarkan gejala yang
                    Anda pilih:</p>

                @foreach ($hasil as $index => $item)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title mb-1">{{ $index + 1 }}.
                                {{ $item['kerusakan']->nama }}</h5>

                            <p class="mb-1"><strong>Tingkat Kecocokan:</strong></p>
                            <div class="progress mb-2" style="height: 20px;">
                                <div class="progress-bar
                                @if ($item['confidence'] >= 80) bg-success
                                @elseif($item['confidence'] >= 50) bg-warning
                                @else bg-danger @endif"
                                    role="progressbar" style="width: {{ $item['confidence'] }}%"
                                    aria-valuenow="{{ $item['confidence'] }}" aria-valuemin="0" aria-valuemax="100">
                                    {{ $item['confidence'] }}%
                                </div>
                            </div>

                            <p class="mb-1"><strong>Gejala Cocok
                                    ({{ count($item['gejala_cocok']) }}/{{ $item['total_gejala'] }})
                                    :</strong></p>
                            <ul>
                                @foreach ($item['gejala_cocok'] as $gid)
                                    @php
                                        $gejala = \App\Models\Gejala::find($gid);
                                    @endphp
                                    <li>{{ $gejala->kode }} - {{ $gejala->nama }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            @endif

            <a href="{{ route('diagnosa.form') }}" class="btn btn-secondary">Ulangi Diagnosa</a>
        </div>
    </section>
@endsection
