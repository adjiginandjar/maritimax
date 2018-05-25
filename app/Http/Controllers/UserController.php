<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Socialite;

class UserController extends Controller
{
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
      $password = $request->input('password');
      $email = $request->input('email');

      $user = User::create([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'phone_number' => $request->input('phone_number'),
          'password' => bcrypt($request->input('password')),
      ]);

      $http = new Client();

      $response = $http->post('http://localhost:8000/oauth/token', [
          'form_params' => [
              'grant_type' => 'password',
              'client_id' => '2',
              'client_secret' => 'RUlGKC8EFpdbOHlo8cobBz1tffwfwXErz2tIurvb',
              'username' => $email,
              'password' => $password,
              'scope' => '*',
          ],
      ]);

      return json_decode((string) $response->getBody(), true);



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
      $user = Socialite::driver('google')->userFromToken($request->input('google-token'));
      info($user->token);
      info($user->refreshToken); // not always provided
      info($user->expiresIn);
      return $user->toString();
    }

    public function manuallogin(){
      $http = new Client();

      $response = $http->post('http://localhost:8000/oauth/token', [
          'form_params' => [
              'grant_type' => 'password',
              'client_id' => '2',
              'client_secret' => 'RUlGKC8EFpdbOHlo8cobBz1tffwfwXErz2tIurvb',
              'username' => 'info02@maritimax.com',
              'password' => 'maritimax',
              'scope' => '*',
          ],
      ]);

      return json_decode((string) $response->getBody(), true);
    }
}
