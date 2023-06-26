@extends('layouts.plantilla')

@section('content')
    <div class="container-md mt-4 p-3 rounded-4 text-center">
        <div class="justify-content-center">
            <h1>Bienvenido a PersonalGF</h1>
            <div>
                <img src="/img/logo.png" class="rounded-4 border border-2" width="1250px" height="500px" alt="...">
            </div>
        </div>
        <div class="mt-3">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-dark">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
@endsection
