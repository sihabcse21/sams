<?php

namespace App\Http\Controllers\Auth;

use const FILTER_VALIDATE_EMAIL;
use function filter_var;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function field() {
        if (filter_var(request()->email, FILTER_VALIDATE_EMAIL)) {
            return 'email';
        } else {
            return 'user_name';
        }
    }

    protected function credentials(Request $request) {
        $credentials              = $request->only($this->username(), 'password');
        $credentials['status_id'] = 1;

        return $credentials;
    }

    public function username()
    {
        $login = request()->input('email');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';
        request()->merge([$field => $login]);
        return $field;
    }
}
