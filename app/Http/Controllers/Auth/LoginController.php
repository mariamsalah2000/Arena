<?php



namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Cache;
use DB;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()
    {

        $this->middleware('guest')->except('logout');

    }

    public function showLoginForm()
    {
        if(isset($_COOKIE['language']))
            \App::setLocale($_COOKIE['language']);
        else
            \App::setLocale('en');

        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make(request()->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        if ($validator->fails()) {
            $error = $validator->errors()->first();
            return back()->with('error',$error);
        }

        if(auth()->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->route('admin.dashboard');
        }
        else {
            return back()->with('error','Username And Password Are Wrong.');
        }

    }
}