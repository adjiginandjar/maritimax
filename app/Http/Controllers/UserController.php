<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Traits\PassportToken;
use Socialite;

class UserController extends Controller
{

    use PassportToken;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = User::create([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'phone_number' => $request->input('phone_number'),
          'password' => bcrypt($request->input('password')),
      ]);

      return $this->getBearerTokenByUser($user, 2, true);



      // return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function getUser(Request $request){
      // $user = Socialite::driver('google')->user();
      // $token = Socialite::driver('google')->getAccessTokenResponse($request->input('google-token'));
      // info($token);
      info($request->input('google-token'));
      $user = Socialite::driver('google')->stateless()->userFromToken($request->input('google-token'));
      info($user->token);
      info($user->refreshToken); // not always provided
      info($user->expiresIn);
      info('+++++++++++++++++++++++++++++++++++++++++++++++');
      info($user->getId());
      info($user->getNickname());
      info($user->getName());
      info($user->getEmail());
      info($user->getAvatar());
      // return $user->toString();
    }

    public function storeGoogle(Request $request){
      // $user = Socialite::driver('google')->user();
      // $token = Socialite::driver('google')->getAccessTokenResponse($request->input('google-token'));

      $gooleUser = Socialite::driver('google')->stateless()->userFromToken($request->input('google-token'));

      $existUser = User::where('email',$gooleUser->getEmail())->first();

      if($existUser){
        return $this->getBearerTokenByUser($existUser, 2, true);
      }else{
        $newUser = User::create([
            'name' => $gooleUser->getName(),
            'email' => $gooleUser->getEmail(),
            'password' => bcrypt('google'.':'.$gooleUser->getEmail()),
        ]);

        return $this->getBearerTokenByUser($newUser, 2, true);
      }

      // return $user->toString();
    }

    public function manuallogin(){
      $user = User::find(26);
      // return  response
      return $this->getBearerTokenByUser($user, 1, true);
      // return array
      // return $this->getBearerTokenByUser($user, 1, false);
    }
}
