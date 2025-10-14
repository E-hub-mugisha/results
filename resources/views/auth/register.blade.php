@extends('layouts.auth')
@section('title', 'Create Account')
@section('content')

<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Sign-Up</h4>
                <div class="nk-block-des">
                    <p>Access the Dashlite panel using your email and passcode.</p>
                </div>
            </div>
        </div>
        <x-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <div class="form-label-group"><label class="form-label" for="default-01">Name
                    </label></div>
                <div class="form-control-wrap">
                    <input id="name" class="form-control form-control-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group"><label class="form-label" for="default-01">Email
                    </label></div>
                <div class="form-control-wrap">
                    <input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autocomplete="username">
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group"><label class="form-label" for="default-01">Password
                    </label></div>
                <div class="form-control-wrap">
                    <input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="new-password">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group"><label class="form-label" for="default-01">Confirm Password
                    </label></div>
                <div class="form-control-wrap">
                    <input id="password_confirmation" class="form-control form-control-lg" type="password" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group"><button type="submit" class="btn btn-lg btn-primary btn-block">Sign
                    in</button></div>
        </form>
        <div class="form-note-s2 text-center pt-4"> Already Have an account?
            <a href="{{ route('register')}}">Sign in instead</a>
        </div>
    </div>
</div>
@endsection