<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Validator;

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
    protected $redirectTo = '/admincpp';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest.admin', ['except' => ['getLogout']]);
    }


    /**
     * Hien thi form login
     * @param void
     * @return response
     */
    public function getLogin ()
    {
        return view('auth_admins.login');
    }

    /**
     * Thuc hien login
     * @param void
     * @return response
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, $this->getAdminLoginRules(), $this->getAdminLoginMessages());

        $credentials = [
            'adm_loginname'     =>  $request->login_name,
            'password'          =>  $request->login_password,
            'adm_active'        =>  1,
        ];

//        dd(Auth::guard('admin')->attempt($credentials, $request->has('remember')));
        if (\Auth::guard('admin')->attempt($credentials, $request->has('remember')))
        {
            $user = \Auth::guard('admin')->user();
            set_session('isadmin', $user->adm_isadmin);
            set_session('adm_id', $user->adm_id);
            set_session('adm_name', $user->adm_name);
            set_session('logged', 1);

            return redirect()->intended($this->redirectTo);
        }

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Bao loi toi nguoi dung
     * @param void
     * @return response
     */
    public function sendFailedLoginResponse(Request $request)
    {
        return redirect()->back()
                         ->withInput($request->only('login_name', 'remember'))
                         ->withErrors(['login_name' => trans('auth.failed')]);
    }

    /**
     * Rules
     * @param void
     * @return array
     */
    private function getAdminLoginRules()
    {
        return [
            'login_name'      =>  'required|max:40',
            'login_password'  =>  'required|max:40|regex:/^[a-z0-9A-Z_-]{6,40}$/'
        ];
    }

    /**
     * Xuat tin nhan
     * @param void
     * @return array
     */
    private function getAdminLoginMessages(){
        return [
            'login_name.required'        =>  trans('admin::form.messages.required'),
            'login_name.max'             =>  'Your name is too long. Maximum is 40 character',
            'login_password.required'    =>  trans('admin::form.messages.required'),
            'login_password.regex'       =>  'Password is only contain [A-Za-z]. The length 6 - 40 character'
        ];
    }

    /**
     * Logout admin
     * @param void
     * @return void
     */
    public function getLogout()
    {
        Auth::guard('admin')->logout();
        \Session::flush();

        return redirect()->route('staff.getLogin');
    }
}
