<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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

    public function login(Request $request)
    {
        $messages = [
            'email.exists' => 'E-Mail is not registered.',
            'password' => 'Wrong Password.',
            'password.min' => 'Password needs to be at least 8 characters.'
        ];
        Validator::make($request->all(), [
            'email' => 'required|exists:uci_users,email',
            'password' => 'required|min:8',
        ], $messages)->validate();

        $admin = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 1,
        ];
        $supervisor = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 2,
        ];
        $student = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 3,
        ];


        if (Auth::attempt($admin, $request->remember)) {
            return redirect()->route('admin.dashboard');
        } else if (Auth::attempt($supervisor, $request->remember)) {
            return redirect()->route('supervisor.dashboard');
        } else if (Auth::attempt($student, $request->remember)) {
            return redirect()->route('student.dashboard');
        } else {
            return redirect()->route('login')->with('Error', 'Invalid E-Mail and Password combination.');
        };
    }

    public function logout(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $user->update([
            'remember_token' => null
        ]);

        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('login');
    }
}
