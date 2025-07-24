@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    <section class="py-4">
        <div class="container">
            <h1>Form Diagnosa Kerusakan Motor Honda Beat</h1>
            <div class="mt-3">
                <button type="button" class="btn text-info bg-info-subtle rounded" data-bs-toggle="modal"
                    data-bs-target="#petunjukModal">
                    Launch demo modal
                </button>
            </div>
            <div class="mt-3">
                <div class="card border">
                    <div class="card-body">
                        <form method="POST" action="{{ route('diagnosa.hasil') }}">
                            @csrf
                            @foreach ($gejalas as $index => $gejala)
                                <div class="mb-3">
                                    <label class="fw-bold d-block">
                                        {{ $index + 1 }}. Apakah {{ strtolower($gejala->nama) }}?
                                    </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gejala[{{ $gejala->id }}]"
                                            value="1" id="ya{{ $gejala->id }}">
                                        <label class="form-check-label" for="ya{{ $gejala->id }}">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gejala[{{ $gejala->id }}]"
                                            value="0" id="tidak{{ $gejala->id }}" checked>
                                        <label class="form-check-label" for="tidak{{ $gejala->id }}">Tidak</label>
                                    </div>
                                </div>
                            @endforeach

                            <div class="">
                                <button type="submit" class="btn btn-primary">Diagnosa Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Petunjuk Multi-step -->
    <div class="modal fade" id="petunjukModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="petunjukModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h3 class="modal-title fw-bold">Petunjuk Pengisian Diagnosa</h3>
                </div>

                <div class="modal-body">
                    <!-- Step 1 -->
                    <div class="step" id="step-1">
                        <h4>Selamat datang di sistem pakar diagnosa kerusakan lampu dan sistem pengisian motor Honda Beat.
                        </h4>
                        <p>Sistem ini dirancang untuk membantu Anda mengetahui kemungkinan kerusakan pada motor Anda melalui
                            serangkaian pertanyaan.</p>
                        <p>Setiap pertanyaan merepresentasikan gejala umum yang sering terjadi. Dengan menjawab semua
                            pertanyaan, sistem akan mencocokkan jawaban Anda dengan basis aturan yang ditentukan oleh pakar.
                        </p>
                        <p><em>Silakan lanjutkan untuk memahami bagaimana sistem bekerja.</em></p>
                    </div>

                    <!-- Step 2 -->
                    <div class="step d-none" id="step-2">
                        <h4>Tentang Sistem:</h4>
                        <ul>
                            <li>Sistem ini menggunakan metode <strong>forward chaining</strong> — yaitu penalaran dari
                                gejala ke kesimpulan.</li>
                            <li>Jika semua gejala dalam suatu aturan terpenuhi, sistem akan mengidentifikasi kerusakan yang
                                paling sesuai.</li>
                        </ul>
                        <h4 class="mt-3">Contoh Penggunaan:</h4>
                        <p>Jika Anda menjawab <strong>Ya</strong> pada gejala seperti "lampu depan tidak menyala", "lampu
                            menyala saat mesin mati", dsb, maka sistem dapat menduga terjadi kerusakan pada
                            <strong>kiprok</strong>.
                        </p>
                        <p><em>Anda tidak perlu memahami teknisnya, cukup jawab sesuai kondisi motor Anda.</em></p>
                    </div>

                    <!-- Step 3 -->
                    <div class="step d-none" id="step-3">
                        <h4>Tips Penting Sebelum Memulai:</h4>
                        <ul>
                            <li><strong>Jawab semua pertanyaan</strong> agar hasil diagnosa maksimal.</li>
                            <li>Sistem <strong>tidak menyimpan jawaban Anda</strong>, sehingga aman dan privat.</li>
                            <li>Anda bisa kembali mengisi ulang jika ingin mengganti jawaban.</li>
                        </ul>

                        <h4 class="mt-3">Cara Mengisi:</h4>
                        <ul>
                            <li>Setiap pertanyaan akan tampil dalam bentuk <strong>Ya / Tidak</strong>.</li>
                            <li>Pilih <strong>Ya</strong> jika Anda mengalami gejala tersebut, dan <strong>Tidak</strong>
                                jika tidak.</li>
                            <li>Contoh: <em>“Apakah lampu depan tidak menyala?”</em> → pilih Ya jika sesuai kondisi motor
                                Anda.</li>
                        </ul>
                    </div>

                    <!-- Step 4 -->
                    <div class="step d-none" id="step-4">
                        <h4>Siap Memulai Diagnosa</h4>
                        <p>Berikut ringkasan sebelum Anda memulai:</p>
                        <ul>
                            <li>Jawaban Anda akan dicocokkan dengan 25 aturan yang telah dibuat oleh pakar.</li>
                            <li>Jika sistem menemukan kecocokan gejala, maka akan ditampilkan jenis kerusakan yang paling
                                mungkin terjadi.</li>
                            <li>Gunakan hasil ini sebagai referensi awal sebelum ke bengkel atau teknisi.</li>
                        </ul>
                        <p><strong>Jika sudah siap, klik "Saya Mengerti" dan mulai pengisian diagnosa.</strong></p>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" id="btn-skip">Lewati Panduan</button>
                    <button type="button" class="btn btn-secondary" id="btn-prev" disabled>Kembali</button>
                    <button type="button" class="btn btn-primary" id="btn-next">Selanjutnya</button>
                    <button type="button" class="btn btn-success d-none" id="btn-finish" data-bs-dismiss="modal">Saya
                        Mengerti</button>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = new bootstrap.Modal(document.getElementById('petunjukModal'));
            modal.show();

            const steps = document.querySelectorAll('.step');
            const prevBtn = document.getElementById('btn-prev');
            const nextBtn = document.getElementById('btn-next');
            const finishBtn = document.getElementById('btn-finish');
            const skipBtn = document.getElementById('btn-skip');

            let currentStep = 0;

            function showStep(index) {
                steps.forEach((step, i) => {
                    step.classList.toggle('d-none', i !== index);
                });
                prevBtn.disabled = index === 0;
                nextBtn.classList.toggle('d-none', index === steps.length - 1);
                finishBtn.classList.toggle('d-none', index !== steps.length - 1);
            }

            prevBtn.addEventListener('click', () => {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            nextBtn.addEventListener('click', () => {
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            });

            skipBtn.addEventListener('click', () => {
                currentStep = steps.length - 1;
                showStep(currentStep);
            });

            showStep(currentStep);
        });
    </script>
@endpush
