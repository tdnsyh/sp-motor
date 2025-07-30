@extends('layouts.admin')
@section('title', 'Selamat datang, ' . Auth::user()->name . '!')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card shadow-none border mb-0">
                <div class="card-body">
                    <h1 class="py-2 px-3 rounded text-primary bg-primary-subtle d-inline-block">
                        <i class="ti ti-activity"></i>
                    </h1>
                    <div>
                        <h5 class="text-primary mb-1">Total Gejala</h5>
                        <h1 class="mb-0 fw-semibold">{{ $totalGejala }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-none border mb-0">
                <div class="card-body">
                    <h1 class="py-2 px-3 rounded text-danger bg-danger-subtle d-inline-block">
                        <i class="ti ti-alert-triangle"></i>
                    </h1>
                    <div>
                        <h5 class="text-danger mb-1">Total Kerusakan</h5>
                        <h1 class="mb-0 fw-semibold">{{ $totalKerusakan }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-none border mb-0">
                <div class="card-body">
                    <h1 class="py-2 px-3 rounded text-warning bg-warning-subtle d-inline-block">
                        <i class="ti ti-code"></i>
                    </h1>
                    <div>
                        <h5 class="text-warning mb-1">Total Rule</h5>
                        <h1 class="mb-0 fw-code">{{ $totalRule }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 row-cols-1 row-cols-md-3 mt-2">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h1 class="py-2 px-3 rounded text-primary bg-primary-subtle d-inline-block">
                        <i class="ti ti-history"></i>
                    </h1>
                    <h5 class="card-title">Total Diagnosa</h5>
                    <h3 class="fw-bold">{{ $totalDiagnosa }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h1 class="py-2 px-3 rounded text-danger bg-danger-subtle d-inline-block">
                        <i class="ti ti-alert-triangle"></i>
                    </h1>
                    <h5 class="card-title">Penyakit Terbanyak</h5>
                    <h3 class="fw-bold">
                        {{ $penyakitTerbanyak ?? '—' }}
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3>Riwayat Diagnosa Terbaru</h3>
                    @if ($riwayatTerbaru->isEmpty())
                        <p class="text-muted mb-0">Belum ada riwayat diagnosa.</p>
                    @else
                        <ul class="list-group list-group-flush">
                            @foreach ($riwayatTerbaru as $item)
                                <li class="list-group-item">
                                    <div class="fw-bold">{{ $item->hasil_diagnosa }}</div>
                                    <small class="text-muted">
                                        {{ $item->created_at->format('d M Y, H:i') }}
                                    </small>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
