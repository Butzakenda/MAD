<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request; 
use App\Models\Estudiante;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Estudiante
     */
    protected function create(Request $request)
    {
        App::setLocale('es');
        $validator = $this->validator($request->all()); // Pasa $request->all() en lugar de $request

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $user = User::create([
                'name' => $request->input('nameUser'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);

            $selectedLanguages = $request->input('languages', []);
            $estudiante = Estudiante::create([
                'Nombres' => $request->input('nameUser'),
                'Apellidos' => $request->input('lastname'),
                'CorreoElectronico' => $request->input('email'),
                'Sexo' => $request->input('sex'),
                'PreferenciasEducativas' => $request->input('CorreoElectronicoClienteInput'),
                'Carrera' => $request->input('carrer'),
                'user_id' => $user->id, // Asignar el ID del usuario al campo user_id
            ]);
            $estudiante->languages()->sync($selectedLanguages);
        }

        return view('auth.login');
    }


}
