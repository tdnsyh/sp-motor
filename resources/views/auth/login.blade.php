@extends('layouts.app')
@section('title', 'Masuk')

@section('content')
    <section class="bg-light">
        <div class="container min-vh-100 d-flex justify-content-center align-items-center py-5">
            <div class="card border shadow-none col-md-5">
                <div class="card-body p-5">
                    <a href="/login" class="d-block mb-3 text-center">
                        <img src="https://mariodevan.com/wp-content/uploads/2017/11/honda-logo.png?w=496&h=496"
                            class="border-0 rounded object-fit-cover" width="150" alt="Logo">
                    </a>
                    <h3 class="fw-semibold mt-3 mb-2 text-center">Selamat Datang, Admin!</h3>
                    <p class="mb-4 text-center">
                        Silakan login untuk mengelola Sistem.
                    </p>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
