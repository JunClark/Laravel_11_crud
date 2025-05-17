@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm" style="margin-top: 60px;">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4">Welcome Back</h2>
                    <p class="text-center text-muted mb-4">Please login to your account</p>

                    <form method="POST" action="{{ url('/login') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" 
                                   class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   placeholder="Enter your email"
                                   required 
                                   autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" 
                                   class="form-control form-control-lg @error('password') is-invalid @enderror" 
                                   id="password" 
                                   name="password"
                                   placeholder="Enter your password" 
                                   required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                        </div>

                        <div class="text-center mt-4">
                            <p class="mb-0">Don't have an account? 
                                <a href="{{ url('/register') }}" class="text-primary text-decoration-none">Create Account</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 