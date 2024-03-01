{{-- @extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.auth')

@section('content')
    <div class="col-12 col-lg-5">
        <div class="card border-0 rounded-2">
            <div class="card-body p-4 p-xl-5">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-4">
                            <h3 class="text-center">
                                <b>Register</b>
                            </h3>
                            @error('email')
                                <div class="alert alert-danger mt-3" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row gy-2 overflow-hidden">
                        <div class="col-12 col-md-4 pe-md-0">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM"
                                    value="{{ old('nim') }}" autocomplete="nim" maxlength="10" required autofocus>
                                <label for="nim" class="form-label">NIM</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                    value="{{ old('name') }}" autocomplete="name" required>
                                <label for="name" class="form-label">Name</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 pe-md-0">
                            <div class="form-floating mb-2">
                                <select class="form-select" name="study_program" id="study_program" required>
                                    <option value="sib" {{ old('study_program') == 'sib' ? 'selected' : '' }}>D4 Sistem
                                        Informasi Bisnis</option>
                                    <option value="ti" {{ old('study_program') == 'ti' ? 'selected' : '' }}>D4 Teknik
                                        Informatika</option>
                                </select>
                                <label for="study program" class="form-label">Study Program</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-2">
                                <select class="form-select" name="class" id="class" required>
                                    <option value="3A" {{ old('class') == '3A' ? 'selected' : '' }}>3A</option>
                                </select>
                                <label for="class" class="form-label">Class</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 pe-md-0">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="contact" id="contact" placeholder="Phone"
                                    value="{{ old('contact') }}" autocomplete="contact" maxlength="14" required autofocus>
                                <label for="contact" class="form-label">Phone</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-floating mb-2">
                                <select class="form-select" name="gender" id="gender" required>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female
                                    </option>
                                </select>
                                <label for="gender" class="form-label">Gender</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    value="{{ old('email') }}" autocomplete="email" required>
                                <label for="email" class="form-label">Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-2">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" autocomplete="current-password" required>
                                <label for="password" class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" type="submit">Register</button>
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
@endsection
