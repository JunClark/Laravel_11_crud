@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm" style="margin-top: 60px;">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4">Create Account</h2>
                    <p class="text-center text-muted mb-4">Please fill in your information to create an account</p>

                    <form method="POST" action="{{ url('/register') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" 
                                   class="form-control form-control-lg @error('name') is-invalid @enderror" 
                                   id="name" 
                                   name="name" 
                                   value="{{ old('name') }}" 
                                   placeholder="Enter your full name"
                                   required 
                                   autofocus>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" 
                                   class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   placeholder="Enter your email"
                                   required>
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
                                   placeholder="Choose a password" 
                                   required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" 
                                   class="form-control form-control-lg" 
                                   id="password_confirmation" 
                                   name="password_confirmation"
                                   placeholder="Confirm your password" 
                                   required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Create Account</button>
                        </div>

                        <div class="text-center mt-4">
                            <p class="mb-0">Already have an account? 
                                <a href="{{ url('/login') }}" class="text-primary text-decoration-none">Sign In</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 