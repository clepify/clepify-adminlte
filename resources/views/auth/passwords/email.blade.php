@extends('layouts.auth')

@section('content')
<section class="py-3 py-md-5 py-xl-8 min-vh-100 d-flex align-items-center" style="background: linear-gradient(135deg, hsla(221, 57%, 33%, 1) 0%, hsla(229, 50%, 50%, 1) 100%);">
    <div class="container">
        <div class="row gx-2 align-items-center">
        <div class="col-12 col-lg-7 d-none d-lg-block">
            <div class="d-flex text-white">
                <div class="col-10">
                    <h1>{{ config('app.name', 'CLEPify') }}</h1>
                    <hr class="border-primary-subtle mb-5">
                    <h2 class="h1 mb-4">Campus Letter Efficiency Practicum</h2>
                    <p class="lead mb-5">Sistem Informasi Manajemen Persuratan Mahasiswa Berbasis Web Di Jurusan Teknologi Informasi Politeknik Negeri Malang.</p>
                    <div class="text-endx">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                        <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5">
            <div class="card border-0 rounded-4">
            <div class="card-body p-4 p-xl-5">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-4">
                            <h3><b>Reset Password</b></h3>
                            @if(Session::has('account_deactivated'))
                                <div class="alert alert-danger mt-3" role="alert">
                                    {{ Session::get('account_deactivated') }}
                                </div>
                            @endif
                            @error('email')
                                <div class="alert alert-danger mt-3" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="row gy-3 overflow-hidden">
                        <div class="col-12">
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}" autocomplete="email" required autofocus>
                                <label for="email" class="form-label">Email Address</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" type="submit">Send Password Reset Link</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end mt-4">
                            <a class="btn btn-link" href="{{ route('login') }}">
                                Back to login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
