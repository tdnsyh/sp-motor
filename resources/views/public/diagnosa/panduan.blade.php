@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <section class="py-4">
        <div class="container col-md-6 align-items-center">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="fw-bold mb-0"><i class="ti ti-lamp text-primary me-2"></i> Petunjuk Diagnosa</h1>
                <a href="/diagnosa/form" class="btn btn-outline-danger">
                    <i class="ti ti-skip-forward me-1"></i> Lewati Panduan
                </a>
            </div>

            <div id="step-1" class="step active bg-white rounded border p-4">
                <h3 class="py-2 px-3 rounded text-primary bg-primary-subtle d-inline-block">
                    <i class="ti ti-info-circle"></i>
                </h3>
                <h1>Selamat Datang</h1>
                <p>Sistem ini membantu Anda mengenali kerusakan lampu & sistem pengisian motor Honda Beat melalui
                    serangkaian pertanyaan. Jawaban Anda akan dicocokkan dengan data pakar untuk menghasilkan diagnosa awal
                    secara otomatis.</p>
                <p><em>Lanjutkan untuk memahami cara kerjanya.</em></p>
            </div>

            <div id="step-2" class="step bg-white rounded border p-4">
                <h4><i class="ti ti-brain me-2 text-primary"></i>Cara Kerja Sistem</h4>
                <ul>
                    <li>Menggunakan metode <strong>forward chaining</strong>: gejala → kesimpulan.</li>
                    <li>Sistem akan mencocokkan gejala dengan 25 aturan berbasis pengalaman teknisi.</li>
                </ul>
                <p>Contoh: Jika gejala seperti "lampu tidak menyala" terpenuhi, maka sistem akan menampilkan kemungkinan
                    kerusakan pada <strong>kiprok</strong>.</p>
            </div>

            <div id="step-3" class="step bg-white rounded border p-4">
                <h4><i class="ti ti-bulb me-2 text-primary"></i>Tips Pengisian</h4>
                <ul>
                    <li><i class="ti ti-circle-check text-success me-1"></i> Jawab semua pertanyaan agar hasil diagnosa
                        lebih akurat.</li>
                    <li><i class="ti ti-lock me-1 text-secondary"></i> Jika tidak login, data Anda <strong>tidak
                            disimpan</strong> dan bersifat anonim.</li>
                    <li><i class="ti ti-user-check me-1 text-info"></i> <strong>Login</strong> untuk menyimpan hasil
                        diagnosa ke dalam riwayat pribadi Anda.</li>
                    <li><i class="ti ti-refresh me-1 text-info"></i> Anda bisa mengulang pengisian kapan saja jika ingin
                        memperbarui jawaban.</li>
                </ul>
                <p>Semua pertanyaan akan ditampilkan dalam bentuk pilihan <strong>Ya / Tidak</strong> sesuai dengan kondisi
                    motor Anda.</p>
            </div>
            <div id="step-4" class="step bg-white rounded border p-4">
                <h4><i class="ti ti-checklist me-2 text-primary"></i>Siap Memulai</h4>
                <ul>
                    <li>Jawaban akan dicocokkan dengan aturan pakar.</li>
                    <li>Jika ditemukan kecocokan, hasil diagnosa akan ditampilkan.</li>
                    <li>Gunakan hasil sebagai referensi awal sebelum ke bengkel.</li>
                </ul>
                <p><strong>Jika Anda siap, klik "Mulai Diagnosa" di bawah.</strong></p>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3">
                <button id="btn-prev" class="btn btn-outline-secondary" disabled>
                    <i class="ti ti-arrow-left me-1"></i> Kembali
                </button>
                <div>
                    <button id="btn-next" class="btn btn-primary">
                        Selanjutnya <i class="ti ti-arrow-right ms-1"></i>
                    </button>
                    <a href="/diagnosa/form" id="btn-finish" class="btn btn-success d-none">
                        <i class="ti ti-play me-1"></i> Mulai Diagnosa
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('script')
    <script>
        const steps = document.querySelectorAll('.step');
        const btnPrev = document.getElementById('btn-prev');
        const btnNext = document.getElementById('btn-next');
        const btnFinish = document.getElementById('btn-finish');

        let current = 0;

        function updateStep() {
            steps.forEach((step, i) => {
                step.classList.toggle('active', i === current);
            });
            btnPrev.disabled = current === 0;
            btnNext.classList.toggle('d-none', current === steps.length - 1);
            btnFinish.classList.toggle('d-none', current !== steps.length - 1);
        }

        btnNext.addEventListener('click', () => {
            if (current < steps.length - 1) {
                current++;
                updateStep();
            }
        });

        btnPrev.addEventListener('click', () => {
            if (current > 0) {
                current--;
                updateStep();
            }
        });

        updateStep();
    </script>
@endpush

@push('style')
    <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
            animation: fadeIn 0.4s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endpush
