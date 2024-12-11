@extends('layouts.app')
@section('title', 'My Profile')
@section('content')
<div class="p-0 container-fluid">
    <h1 class="mb-3 h2"><strong>{{ __('My Profile') }}</strong></h1>
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="mt-0 col">
                        <form action="{{ route('profile.update') }}" method="post">
                            @csrf
                            @method('patch')

                            <div class="mb-3 form-group">
                                <label for="name" class="text-black form-label fw-bold">{{ __('Name') }}</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required autocomplete="name">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="email" class="text-black form-label fw-bold">{{ __('Email') }}</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="current_password" class="text-black form-label fw-bold">{{ __('Current Password') }}</label>
                                <input type="password" name="current_password" id="current_password" class="form-control" required autocomplete="current-password">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="password" class="text-black form-label fw-bold">{{ __('New Password') }}</label>
                                <input type="password" name="password" id="password" class="form-control" required autocomplete="new-password">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="password_confirmation" class="text-black form-label fw-bold">{{ __('Confirm New Password') }}</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required autocomplete="confirm-new-password">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">{{ __('Submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
