@extends('layouts.admin')
@section('title', 'Riwayat Diagnosa')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse($riwayats as $item)
            <div class="col">
                <div class="card h-100 mb-0">
                    <div class="card-body">
                        <h3 class="card-">{{ $item->hasil_diagnosa }}</h3>
                        <strong>Gejala Terpilih:</strong>
                        <ul>
                            @foreach (App\Models\Gejala::whereIn('id', $item->gejala_terpilih)->get() as $gejala)
                                <li>{{ $gejala->nama }}</li>
                            @endforeach
                        </ul>
                        <small class="text-muted">Tanggal: {{ $item->created_at->format('d-m-Y H:i') }}</small>
                    </div>
                </div>
            </div>
        @empty
            <p>Tidak ada riwayat diagnosa.</p>
        @endforelse
    </div>
@endsection
