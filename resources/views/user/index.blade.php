@extends('layouts.user')
@section('title', 'Selamat datang ' . Auth::user()->name . '!')

@section('content')
    <p class="mt-0">
        Anda sedang menggunakan <strong>Sistem Pakar Diagnosa Kerusakan Lampu dan Rangkaian Pengisian Arus
            Listrik</strong> pada Motor <strong>Honda Beat</strong> berbasis web dengan metode
        <strong>Forward Chaining</strong>.
    </p>
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="py-2 px-3 rounded text-primary bg-primary-subtle d-inline-block">
                        <i class="ti ti-info-circle"></i>
                    </h1>
                    <h3>Tentang Sistem</h3>
                    <p>
                        Sistem ini membantu mendiagnosa kerusakan berdasarkan gejala yang Anda alami. Proses
                        dilakukan
                        secara otomatis menggunakan metode inferensi Forward Chaining untuk menentukan kemungkinan
                        kerusakan.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h1 class="py-2 px-3 rounded text-warning bg-warning-subtle d-inline-block">
                        <i class="ti ti-bulb"></i>
                    </h1>
                    <h3>Tips Penggunaan</h3>
                    <ul>
                        <li>Pastikan menjawab semua pertanyaan gejala dengan tepat</li>
                        <li>Lakukan diagnosa saat motor dalam kondisi bermasalah</li>
                        <li>Cetak atau simpan hasil diagnosa sebagai arsip</li>
                    </ul>
                </div>
            </div>
            <a href="/diagnosa/form" class="btn btn-primary rounded">
                Mulai Diagnosa Sekarang
            </a>
        </div>
        <div class="col">
            <div class="row g-3">
                <div class="col">
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
                <div class="col">
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
            </div>
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
