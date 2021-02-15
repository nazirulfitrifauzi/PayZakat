<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use App\Models\KYCAmil;
use App\Models\KYC;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        $credentials['active'] = 1;
        return $credentials;
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        // Load user from database
        $user = User::where($this->username(), $request->{$this->username()})->first();
        if ($user) { //checking if the user exist and check if it has submitted KYC documents/pictures
            $kycA = KYCAmil::where('uuid', $user->uuid)->first();
            $kyc = KYC::where('uuid', $user->uuid)->first();
        }
        // Check if user was successfully loaded, that the password matches
        // and active is not 1. If so, override the default error message.
        if (!$user) {
            return back()->with('message', "Akaun ini tidak wujud di dalam pangkalan data kami.");
        } elseif ($user && \Hash::check($request->password, $user->password) && $user->active == 0 && !$kyc && $user->role == 1) {
            return redirect()->route('kyc', ['uuid' => $user->uuid]);
        } elseif ($user && \Hash::check($request->password, $user->password) && $user->active == 0 && !$kycA && $user->role == 3) {
            return redirect()->route('kycA', ['uuid' => $user->uuid]);
        } elseif ($user && \Hash::check($request->password, $user->password) && $user->active == 0) {
            return back()->with('message', "Akaun ini masih belum diaktifkan.");
        } elseif ($user && \Hash::check($request->password, $user->password) && $user->active == 2) {
            return back()->with('message', "Pendaftaran akaun ini telah ditolak.");
        } elseif ($user && ($request->password != $user->password)) {
            return back()->with('message', "Kelayakan ini tidak sepadan dengan rekod kami.");
        }
    }
}
