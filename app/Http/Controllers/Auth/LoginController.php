<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

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

    public function redirectTo()
    {
        $user = Auth::user();

        if ($user->role == 'super-admin') {
            return route('users.index'); // Halaman manajemen user
        } elseif ($user->role == 'admin') {
            return route('siswa.index'); // Halaman manajemen siswa
        } elseif ($user->role == 'siswa') {
            return route('siswa.show', $user->siswa_id); // Khusus siswa
        }
    }

    public function loggedOut(\Illuminate\Http\Request $request)
    {
        return redirect('/beranda'); // Ganti '/beranda' sesuai route kamu
    }
}
