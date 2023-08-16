@extends('layout.auth')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{__('Masuk')}}</h4>
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-group">
                <label for="email">{{__('E-Mail')}}</label>
                <input id="email" type="email" class="form-control @error('email')
                is-invalid @enderror" name="email" required autofocus autocomplete="email" value="{{old('email')}}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{__('Kata sandi')}}
                </label>
                <input id="password" type="password" class="form-control @error('pa ssword')
is-invalid
                @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="text-right">
                    @if (Route::has('password.request'))
                    <a href="{{route('password.request')}}" class="small">
                        {{__('Lupa Kata sandi?')}}
                    </a>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="form-check position-relative mb-2">
                  <input type="checkbox" class="form-check-input d-none" id="remember" name="remember" {{old('remember') ? 'checked':''}}>
                  <label class="checkbox checkbox-xxs form-check-label ml-1" for="remember"
                         data-icon="&#xe936">{{__('Ingatkan')}}</label>
                </div>
            </div>

            <div class="form-group no-margin">
                <button type="submit" class="btn btn-block" style="background-color: orange; color:white">
                    {{__('Masuk')}}
                </button>
            </div>
            <div class="text-center mt-3 small">
                Tidak punya akun? <a href="{{route('register')}}">Daftar</a>
            </div>
        </form>
    </div>
</div>


@endsection
