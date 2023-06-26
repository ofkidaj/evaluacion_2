<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'rutUsuario' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'apellidoUsuario' => ['required', 'string', 'max:255'],
            'telefonoUsuario' => ['required', 'integer', 'min:8'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'ciudadUsuario' => ['required', 'integer'],
            'tipoUsuario' => ['required', 'integer'],
            'nacionalidadUsuario' => ['required', 'integer'],
            'fechaDeNacimientoUsuario' => ['required', 'date'],
            'sexoUsuario' => ['required', 'integer'],
            'generoUsuario' => ['required', 'integer'],
            'estadoCivilUsuario' => ['required', 'integer'],
            'bancoUsuario' => ['required', 'integer'],            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'rutUsuario' => $data['rutUsuario'],
            'name' => $data['name'],
            'apellidoUsuario' => $data['apellidoUsuario'],
            'telefonoUsuario' => $data['telefonoUsuario'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'ciudadUsuario' => $data['ciudadUsuario'],
            'tipoUsuario' => $data['tipoUsuario'],
            'nacionalidadUsuario' => $data['nacionalidadUsuario'],
            'fechaDeNacimientoUsuario' => $data['fechaDeNacimientoUsuario'],
            'sexoUsuario' => $data['sexoUsuario'],
            'generoUsuario' => $data['generoUsuario'],
            'estadoCivilUsuario' => $data['estadoCivilUsuario'],
            'bancoUsuario' =>    $data['bancoUsuario'],
        ]);
    }
}
