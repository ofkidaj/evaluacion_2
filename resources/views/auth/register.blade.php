@extends('layouts.plantilla')

@section('title','PersonalGF')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registro') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="rutUsuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Rut') }}</label>

                                <div class="col-md-6">
                                    <input id="rutUsuario" type="text"
                                        class="form-control @error('rutUsuario') is-invalid @enderror"
                                        name="rutUsuario" value="{{ old('rutUsuario') }}" required
                                        autocomplete="rutUsuario" autofocus>

                                    @error('rutUsuario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="apellidoUsuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Primer Apellido') }}</label>

                                <div class="col-md-6">
                                    <input id="apellidoUsuario" type="text"
                                        class="form-control @error('apellidoUsuario') is-invalid @enderror"
                                        name="apellidoUsuario" value="{{ old('apellidoUsuario') }}" required
                                        autocomplete="apellidoUsuario" autofocus>

                                    @error('apellidoUsuario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="telefonoUsuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

                                <div class="col-md-6">
                                    <input id="telefonoUsuario" type="text"
                                        class="form-control @error('telefonoUsuario') is-invalid @enderror"
                                        name="telefonoUsuario" value="{{ old('telefonoUsuario') }}" required
                                        autocomplete="telefonoUsuario" autofocus>

                                    @error('telefonoUsuario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="ciudadUsuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Ciudad') }}</label>

                                <div class="col-md-6">
                                    <select id="ciudadUsuario" type="text" class="form-control @error('ciudadUsuario') is-invalid @enderror"
                                        name="ciudadUsuario" required autocomplete="ciudadUsuario" autofocus>>
                                        <option selected>Selecciona su Ciudad</option>
                                        <option value="1">Temuco</option>
                                        <option value="2">Santiago</option>
                                        <option value="3">Valparaíso </option>
                                        <option value="4">Villarrica</option>
                                        <option value="5">Freire </option>
                                        <option value="6">Pucón</option>

                                        @error('ciudadUsuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tipoUsuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tipo de Usuario') }}</label>

                                <div class="col-md-6">
                                    <select id="tipoUsuario" type="text" class="form-control @error('tipoUsuario') is-invalid @enderror"
                                        name="tipoUsuario" required autocomplete="tipoUsuario" autofocus>>
                                        <option>Seleccione tipo de usuario</option>
                                        <option selected value="1">Cliente</option>
                                        <option value="2">Asesor</option>

                                        @error('tipoUsuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nacionalidadUsuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nacionalidad') }}</label>

                                <div class="col-md-6">
                                    <select id="nacionalidadUsuario" type="text"
                                        class="form-control @error('nacionalidadUsuario') is-invalid @enderror"
                                        name="nacionalidadUsuario" required autocomplete="nacionalidadUsuario" autofocus>>
                                        <option>Selecciona su nacionalidad</option>
                                        <option selected value="1">Chilena</option>
                                        <option value="2">Argentina</option>
                                        <option value="3">Peruana </option>
                                        <option value="4">EEUU</option>
                                        <option value="5">Otra </option>

                                        @error('nacionalidadUsuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fechaDeNacimientoUsuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Fecha de Nacimiento') }}</label>

                                <div class="col-md-6">
                                    <input id="fechaDeNacimientoUsuario" type="date"
                                        class="form-control @error('fechaDeNacimientoUsuario') is-invalid @enderror"
                                        name="fechaDeNacimientoUsuario" value="{{ old('fechaDeNacimientoUsuario') }}"
                                        required autocomplete="fechaDeNacimientoUsuario" autofocus>

                                    @error('fechaDeNacimientoUsuario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="sexoUsuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Sexo') }}</label>

                                <div class="col-md-6">
                                    <select id="sexoUsuario" type="text" class="form-control @error('sexoUsuario') is-invalid @enderror"
                                        name="sexoUsuario" required autocomplete="sexoUsuario" autofocus>>
                                        <option selected>Seleccione Sexo</option>
                                        <option value="1">Hombre</option>
                                        <option value="2">Mujer</option>

                                        @error('sexoUsuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="generoUsuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Genero') }}</label>

                                <div class="col-md-6">
                                    <select id="generoUsuario" type="text" class="form-control @error('generoUsuario') is-invalid @enderror"
                                        name="generoUsuario" required autocomplete="generoUsuario" autofocus>>
                                        <option selected>Seleccione Genero</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                        <option value="3">Prefiero no decirlo</option>
                                        <option value="4">Helicóptero Apache</option>

                                        @error('generoUsuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="estadoCivilUsuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Estado Civil') }}</label>

                                <div class="col-md-6">
                                    <select id="estadoCivilUsuario" type="text" class="form-control @error('estadoCivilUsuario') is-invalid @enderror"
                                        name="estadoCivilUsuario" required autocomplete="estadoCivilUsuario" autofocus>>
                                        <option selected>Seleccione su Estado Civil</option>
                                        <option value="1">Casado/a</option>
                                        <option value="2">Soltero/a</option>

                                        @error('estadoCivilUsuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bancoUsuario"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Banco') }}</label>

                                <div class="col-md-6">
                                    <select id="bancoUsuario" type="text" class="form-control @error('bancoUsuario') is-invalid @enderror"
                                        name="bancoUsuario" required autocomplete="bancoUsuario" autofocus>>
                                        <option selected>Seleccione su Banco</option>
                                        <option value="1">Banco Estado</option>
                                        <option value="2">Santander</option>

                                        @error('bancoUsuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-dark">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
