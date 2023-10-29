<link rel="icon" type="image/x-icon" href="/img/T4U.ico">
<link rel="icon" type="image/png" href="/favicon.png">
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center mt-3">
    @auth
        <a href="{{ route('download.file1') }}" class="btn btn-primary">Download W9</a>
        <a href="{{ route('download.file2') }}" class="btn btn-primary">Download Operating Authority MC Number</a>
    @else
        <p>Please <a href="{{ route('login') }}">log in</a> to download paperwork.</p>
    @endauth
</div>

@endsection
