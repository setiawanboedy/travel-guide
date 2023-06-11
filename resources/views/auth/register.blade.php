@extends('layout.auth')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ __('Create new account') }}</h4>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <input type="text" class="form-control @error('name')
is-invalid
                @enderror"
                        value="{{ old('name') }}" id="name" name="name" required autofocus autocomplete="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="username">{{ __('Username') }}</label>
                    <input type="text" class="form-control @error('username')
is-invalid
                @enderror"
                        value="{{ old('username') }}" id="username" name="username" required autofocus
                        autocomplete="username">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email"
                        class="form-control @error('email')
is-invalid
                @enderror"
                        value="{{ old('email') }}" name="email" required autocomplete="email">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">{{ __('Password') }}
                        </label>
                        <input id="password" type="password"
                            class="form-control @error('password')
is-invalid
                    @enderror" name="password"
                            required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password-confirm">{{ __('Confirm Password') }}
                        </label>
                        <input id="password-confirm" type="password2" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>


                <div class="form-group no-margin">
                    <button type="submit" class="btn btn-block" style="background-color: orange; color:white">
                        Sign Up
                    </button>
                </div>
                <div class="text-center mt-3 small">
                    Already have an account? <a href="{{ route('login') }}">Sign In</a>
                </div>
            </form>
        </div>
    </div>
@endsection
