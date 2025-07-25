<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hasil Diagnosa</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        .card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .card-title {
            font-weight: bold;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <h3>Hasil Diagnosa</h3>
    @if (empty($hasil))
        <p>Tidak ditemukan kerusakan berdasarkan gejala yang dipilih.</p>
    @else
        <p>Sistem menemukan <strong>{{ count($hasil) }}</strong> kemungkinan kerusakan:</p>

        @foreach ($hasil as $index => $item)
            <div class="card">
                <div class="card-title">{{ $index + 1 }}. {{ $item['kerusakan']['nama'] }}</div>
                <p><strong>Tingkat Kecocokan:</strong> {{ $item['confidence'] }}%</p>
                <p><strong>Gejala Cocok:</strong> ({{ count($item['gejala_cocok']) }}/{{ $item['total_gejala'] }})</p>
                <ul>
                    @foreach ($item['gejala_cocok'] as $gid)
                        @php
                            $gejala = \App\Models\Gejala::find($gid);
                        @endphp
                        <li>{{ $gejala->kode }} - {{ $gejala->nama }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    @endif
</body>

</html>
