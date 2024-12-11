@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="p-0 container-fluid">
        <h1 class="mb-3 h2"><strong>Dashboard</strong></h1>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="mt-0 col">
                            <h5 class="text-center text-black card-title">{{ __("You're logged in!") }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
