<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Response;

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
        if ($data['pengguna_flag'] == 2) { //if the registered user is PPZ
            return Validator::make($data, [
                'name'      => ['required', 'string', 'max:255'],
                'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password'  => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        } else {
            return Validator::make($data, [
                'name'      => ['required', 'string', 'max:255'],
                'nric'      => ['required', 'string', 'min:12', 'max:12', 'unique:users'],
                'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password'  => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if ($data['pengguna_flag'] == 2) { //if the registered user is PPZ

            return User::create([
                'uuid'      => (string) Str::uuid(),
                'name'      => $data['name'],
                'role'      => $data['pengguna_flag'],
                'email'     => $data['email'],
                'password'  => Hash::make($data['password']),
            ]);
        } else {
            return User::create([
                'uuid'      => (string) Str::uuid(),
                'name'      => $data['name'],
                'nric'      => $data['nric'],
                'role'      => $data['agent_flag'],
                'email'     => $data['email'],
                'password'  => Hash::make($data['password']),
            ]);
        }
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        if ($user->role == '2') { //if the registered user is PPZ
            return $this->registered($request, $user)
                ?: redirect()->route('login')->with('message', 'Sila tunggu pengesahan daripada pihak Admin.');
        } else if ($user->role == '3') { //if the registered user is Agent Amil
            return $this->registered($request, $user)
                ?: redirect()->route('kycA', ['uuid' => $user->uuid]);
        } else {
            return $this->registered($request, $user)
                ?: redirect()->route('kyc', ['uuid' => $user->uuid]);
        }

        return $request->wantsJson()
            ? new Response('', 201)
            : redirect($this->redirectPath());
    }
}
