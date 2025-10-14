@extends('layouts.auth')
@section('title', 'Login')
@section('content')

<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Sign-In</h4>
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
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <div class="form-label-group"><label class="form-label" for="default-01">Email
                    </label></div>
                <div class="form-control-wrap">
                    <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="form-control form-control-lg" id="default-01"
                        placeholder="Enter your email address ">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group"><label class="form-label"
                        for="password">Passcode</label>
                    @if (Route::has('password.request'))
                    <a class="link link-primary link-sm"
                        href="{{ route('password.request') }}">Forgot Code?</a>
                    @endif
                </div>
                <div class="form-control-wrap"><a href="#"
                        class="form-icon form-icon-right passcode-switch lg"
                        data-target="password"><em
                            class="passcode-icon icon-show icon ni ni-eye"></em><em
                            class="passcode-icon icon-hide icon ni ni-eye-off"></em></a><input
                        type="password" name="password" required autocomplete="current-password" class="form-control form-control-lg" id="password"
                        placeholder="Enter your passcode"></div>
            </div>
            <div class="form-group"><button type="submit" class="btn btn-lg btn-primary btn-block">Sign
                    in</button></div>
        </form>
        <div class="form-note-s2 text-center pt-4"> New on our platform?
            <a href="{{ route('register')}}">Create an account</a>
        </div>

    </div>
</div>
@endsection