@extends('layouts.admin')
@section('title', 'Dashboard')

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
@endsection
