@extends('layouts.app')

@section('content')
    {{-- navbar --}}
    @include('partials.navbar')
    {{-- hero section --}}
    <div class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-3 align-items-center">
                <div class="col">
                    <span class="badge text-bg-secondary bg-opacity-50 rounded-1 py-2 px-3">SISTEM PAKAR</span>
                    <h1 class="fw-semibold display-6">
                        Diagnosa <span class="fw-bold">Kerusakan Lampu</span> dan <span class="fw-bold">Rangkaian
                            Pengisian</span> Motor Honda Beat? <span class="text-bg-primary">Serahkan ke Sistem Kami!</span>
                    </h1>
                    <h5>Sistem pakar berbasis web yang canggih dan responsif. Menggunakan metode forward chaining untuk
                        hasil diagnosa yang akurat dan cepat.</h5>
                    <div class="mt-3">
                        <a href="/diagnosa/form" class="btn btn-primary btn-lg">Coba Diagnosa</a>
                        <a href="/tentang" class="btn text-primary bg-primary-subtle rounded btn-lg">Tentang Sistem</a>
                    </div>
                </div>
                <div class="col d-none d-md-block">
                    <img src="https://boonsiewhonda.com.my/wp-content/uploads/2024/12/57.png" alt="Honda Beat"
                        class="img-fluid object-fit-cover" />
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="border rounded p-5 mt-3">
                <div class="row row-cols-2 row-cols-md-4 g-4">
                    <!-- Gejala -->
                    <div class="col d-flex align-items-center gap-3">
                        <h1 class="py-2 px-3 rounded text-warning bg-warning-subtle d-inline-block mb-0">
                            <i class="ti ti-alert-triangle"></i>
                        </h1>
                        <div>
                            <h1 class="fw-bold mb-0">30+</h1>
                            <p class="mb-0 text-muted">Gejala Teridentifikasi</p>
                        </div>
                    </div>

                    <!-- Kerusakan -->
                    <div class="col d-flex align-items-center gap-3">
                        <h1 class="py-2 px-3 rounded text-danger bg-danger-subtle d-inline-block mb-0">
                            <i class="ti ti-tools"></i>
                        </h1>
                        <div>
                            <h1 class="fw-bold mb-0">15+</h1>
                            <p class="mb-0 text-muted">Jenis Kerusakan</p>
                        </div>
                    </div>

                    <!-- Metode -->
                    <div class="col d-flex align-items-center gap-3">
                        <h1 class="py-2 px-3 rounded text-success bg-success-subtle d-inline-block mb-0">
                            <i class="ti ti-recharging"></i>
                        </h1>
                        <div>
                            <h1 class="fw-bold mb-0">Forward</h1>
                            <p class="mb-0 text-muted">Chaining Method</p>
                        </div>
                    </div>

                    <!-- Teknologi -->
                    <div class="col d-flex align-items-center gap-3">
                        <h1 class="py-2 px-3 rounded text-info bg-info-subtle d-inline-block mb-0">
                            <i class="ti ti-world"></i>
                        </h1>
                        <div>
                            <h1 class="fw-bold mb-0">100%</h1>
                            <p class="mb-0 text-muted">Berbasis Web</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <h1 class="fw-semibold text-center mb-4">Cara Kerja Sistem</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 text-center">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <i class="ti ti-clipboard h1 text-primary"></i>
                            <h5 class="fw-bold mt-2">Input Gejala</h5>
                            <p>Pengguna memilih gejala yang sesuai dengan kondisi motor.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <i class="ti ti-calculator h1 text-success"></i>
                            <h5 class="fw-bold mt-2">Proses Forward Chaining</h5>
                            <p>Sistem menganalisa gejala menggunakan basis aturan.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <i class="ti ti-bulb h1 text-warning"></i>
                            <h5 class="fw-bold mt-2">Hasil Diagnosa</h5>
                            <p>Sistem menampilkan kemungkinan kerusakan dan solusi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="container">
            <h1 class="fw-s">Lorem, ipsum dolor.</h1>
            <div class="mt-3">
                <a href="/diagnosa" class="btn text-info bg-info-subtle rounded">Diagnosa Sekarang</a>
                <a href="/login" class="btn text-warning bg-warning-subtle rounded">Masuk</a>
            </div>
            <div class="mt-3">
                <h1 class="py-2 px-3 rounded text-warning bg-warning-subtle d-inline-block">
                    <i class="ti ti-code"></i>
                </h1>
            </div>
        </div>
    </section>
    <footer class="mt-5 pt-4 border-top text-center small text-muted">
        <p>Sistem Pakar Diagnosa Kerusakan Motor Honda Beat &copy; 2025</p>
        <p>Disusun oleh Tedi Ansyah | Metode Forward Chaining</p>
    </footer>
@endsection
