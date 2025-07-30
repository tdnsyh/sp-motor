@extends('layouts.app')

@section('content')
    @include('partials.navbar')
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
                        <a href="/diagnosa/panduan" class="btn btn-primary btn-lg">Coba Diagnosa</a>
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
            <row class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center">
                <div class="col">
                    <h2>Tentang pengembang</h2>
                    <h1 class="display-2 fw-bold text-primary">Moch Tio Agustian</h1>
                    <p>
                        Saya adalah Moch Tio Agustian, mahasiswa Program Studi Sistem Informasi di Fakultas Sains dan
                        Teknologi, Universitas Cipasung Tasikmalaya. Proyek tugas akhir ini saya buat sebagai bentuk
                        implementasi dari ilmu yang telah saya pelajari, khususnya dalam menerapkan metode forward chaining
                        untuk mendiagnosa kerusakan pada sistem kelistrikan motor Honda Beat.
                    </p>
                    <a href="/tentang" class="btn btn-lg text-primary bg-primary-subtle">Selengkapnya</a>
                    <div class="rounded border p-4 bg-light mt-4">
                        <p class="fw-bold mb-3">Identitas Pengembang</p>
                        <div class="row mb-2 align-items-center">
                            <div class="col-auto">
                                <i class="ti ti-id fs-5 text-primary"></i>
                            </div>
                            <div class="col">
                                <strong>NIM:</strong> 20210201017
                            </div>
                        </div>

                        <div class="row mb-2 align-items-center">
                            <div class="col-auto">
                                <i class="ti ti-user fs-5 text-success"></i>
                            </div>
                            <div class="col">
                                <strong>Nama:</strong> Moch Tio Agustian
                            </div>
                        </div>

                        <div class="row mb-2 align-items-center">
                            <div class="col-auto">
                                <i class="ti ti-school fs-5 text-warning"></i>
                            </div>
                            <div class="col">
                                <strong>Program Studi:</strong> Sistem Informasi
                            </div>
                        </div>

                        <div class="row mb-2 align-items-center">
                            <div class="col-auto">
                                <i class="ti ti-building fs-5 text-danger"></i>
                            </div>
                            <div class="col">
                                <strong>Fakultas:</strong> Sains dan Teknologi
                            </div>
                        </div>

                        <div class="row mb-2 align-items-center">
                            <div class="col-auto">
                                <i class="ti ti-map-pin fs-5 text-secondary"></i>
                            </div>
                            <div class="col">
                                <strong>Universitas:</strong> Cipasung Tasikmalaya
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <i class="ti ti-calendar fs-5 text-info"></i>
                            </div>
                            <div class="col">
                                <strong>Tahun:</strong> 2025
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/images/profil.jpg') }}" alt=""
                        class="img-fluid object-fit-cover rounded h-auto">
                </div>
            </row>
        </div>
    </section>

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
    <section id="fitur-utama" class="py-5 bg-info bg-opacity-10">
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col-md-4">
                    <h1>Fitur Utama Sistem</h1>
                </div>
                <div class="col-md-8">
                    <div class="row row-cols-2 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h1>
                                        <i class="ti ti-bolt text-primary"></i>
                                    </h1>
                                    <h5 class="card-title">Diagnosa Cepat</h5>
                                    <p class="card-text">Sistem memberikan hasil diagnosa hanya dalam hitungan detik.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h1>
                                        <i class="ti ti-bolt text-info"></i>
                                    </h1>
                                    <h5 class="card-title">Forward Chaining</h5>
                                    <p class="card-text">Menggunakan metode logika pakar untuk hasil yang akurat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h1>
                                        <i class="ti ti-tools text-primary"></i>
                                    </h1>
                                    <h5 class="card-title">Solusi Praktis</h5>
                                    <p class="card-text">Memberikan saran perbaikan yang mudah dipahami dan diterapkan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h1>
                                        <i class="ti ti-device-mobile text-danger"></i>
                                    </h1>
                                    <h5 class="card-title">Akses Web</h5>
                                    <p class="card-text">Dapat digunakan melalui perangkat apa saja yang terhubung
                                        internet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni" class="py-5">
        <div class="container">
            <h1 class="text-center">Apa Kata Pengguna?</h1>
            <div class="row g-4 mt-2">
                <div class="col-md-4">
                    <div class="card h-100 border">
                        <div class="card-body">
                            <p class="card-text">"Sistem ini sangat membantu! Saya bisa langsung tahu masalah pada motor
                                saya tanpa harus ke bengkel dulu."</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex align-items-center">
                            <img src="https://i.pravatar.cc/50?img=12" class="rounded-circle me-3" alt="user"
                                width="50" height="50">
                            <div>
                                <strong>Andi Saputra</strong><br>
                                <small>Mahasiswa Teknik</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <p class="card-text">"Desainnya simpel dan mudah digunakan. Saya suka fitur forward
                                chaining-nya, terasa pintar dan responsif."</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex align-items-center">
                            <img src="https://i.pravatar.cc/50?img=20" class="rounded-circle me-3" alt="user"
                                width="50" height="50">
                            <div>
                                <strong>Rina Lestari</strong><br>
                                <small>Tukang Servis Motor</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <p class="card-text">"Akurasi diagnosanya cukup tinggi. Saya tes beberapa kasus nyata dan
                                hasilnya cocok."</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex align-items-center">
                            <img src="https://i.pravatar.cc/50?img=35" class="rounded-circle me-3" alt="user"
                                width="50" height="50">
                            <div>
                                <strong>Budi Hermawan</strong><br>
                                <small>Dosen Otomotif</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <p class="card-text">"Bermanfaat banget untuk saya yang sering utak-atik motor sendiri. Gak
                                bingung lagi kalau lampu mati tiba-tiba."</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex align-items-center">
                            <img src="https://i.pravatar.cc/50?img=8" class="rounded-circle me-3" alt="user"
                                width="50" height="50">
                            <div>
                                <strong>Fajar Nugroho</strong><br>
                                <small>Pemilik Honda Beat</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <p class="card-text">"Saya rekomendasikan untuk teman-teman teknisi pemula. Solusinya detail
                                dan logis."</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex align-items-center">
                            <img src="https://i.pravatar.cc/50?img=14" class="rounded-circle me-3" alt="user"
                                width="50" height="50">
                            <div>
                                <strong>Siti Marlina</strong><br>
                                <small>Siswa SMK Otomotif</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection
