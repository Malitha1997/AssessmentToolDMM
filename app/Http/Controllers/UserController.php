<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        request()->validate([
            'username' => 'required', 'string', 'max:255', 'unique:users',
            'password' => 'required|same:confirm-password',
        ]);
        //dd($request);
        $user = new User;

        $user->username = $request->username;
        $user->password = Hash::make($request->password);


        $user->save();

        return redirect()->route('login')
                            ->with('success','Account created successfully.');
    }
}
