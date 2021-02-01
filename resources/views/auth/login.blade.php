@extends('layouts.app')

@section('content')
<img class="wave" src="img/wave.png">
<div class="container">
            <div class="img">
                <img src="img/work_together.svg">
            </div>
    <div class="login-content">
    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <img src="img/avatar.svg">
                        <h2 class="title">WorkLink</h2>
                    <div class="input-div one">
                            <div class="i">
                            <i class="fas fa-user"></i>
                            </div>
                        <div class="div">
                            <h5>Username</h5>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="input" >
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                                <div class="div">
                                        <h5>Password</h5>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="input">
                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                                </div>
                    </div>         

                                @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <input type="submit" class="btn" value="Login" name="submit">
                    </form>
                </div>
            
                <script type="text/javascript" src="js/main.js"></script>
    </div>
</div>
@endsection
