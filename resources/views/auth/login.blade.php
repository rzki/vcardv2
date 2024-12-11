@extends('layouts.guest')
@section('title', 'Login')
@section('content')
    <div class="mt-4 text-center">
        <h1 class="mb-4 h2">Laravel Boilerplate</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="m-sm-3">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control form-control-lg" type="email" name="email"
                            placeholder="Enter your email" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input class="form-control form-control-lg" type="password" name="password"
                            placeholder="Enter your password" />
                    </div>
                    <div>
                        <div class="form-check align-items-center">
                            <input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me"
                                name="remember-me" checked>
                            <label class="form-check-label text-small" for="customControlInline">Remember me</label>
                        </div>
                    </div>
                    <div class="gap-2 mt-3 d-grid">
                        <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
