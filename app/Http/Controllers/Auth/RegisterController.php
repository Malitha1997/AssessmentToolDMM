<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
        return Validator::make($data, [
            'username' => 'required|string|max:255|unique:users|regex:/^[a-zA-Z0-9]+$/',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|same:confirm-password',
            'type'=> 'required|integer'
        ]);


    }

    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => $data['type'],
        ]);
        // Auth::guard()->login($user);

        //return redirect()->intended('/home');
        //         ->with('error','User account created successfully.');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

     public function logingovofficialregister(){
        return view("auth.register2");
     }

     public function govofficialaccount(Request $request){
        request()->validate([
            'username' => 'required|string|max:255|unique:users|regex:/^[a-zA-Z0-9]+$/',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|same:confirm-password',
            'type'=> 'required|string'
        ]);
dd($request);
        $user=new User;

        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;

        $user->save();

        return redirect("login2");
     }

}
