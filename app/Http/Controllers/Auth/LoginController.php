<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/si';

    protected $loginPath = '/si/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
    * Redirect the user to the GitHub authentication page.
    *
    * @return \Illuminate\Http\Response
    */
   public function redirectToProvider()
   {
       return Socialite::driver('google')->stateless()->redirect();
   }

   public function logout(Request $request){
        Auth::logout();
        return redirect('/si/login');
    }

   /**
    * Obtain the user information from GitHub.
    *
    * @return \Illuminate\Http\Response
    */
   public function handleProviderCallback()
   {
      // $user = Socialite::driver('google')->user();
      //
      // User::create([
      //     'name' => $user->input('name'),
      //     'email' => $request->input('email'),
      //     'phone_number' => $request->input('phone_number'),
      //     'password' => bcrypt($request->input('password')),
      // ]);
      $user = Socialite::driver('google')->stateless()->user();
      return response()->json($user, 201);
   }
}
