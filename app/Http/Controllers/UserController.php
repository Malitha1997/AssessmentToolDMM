<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(Request $request){
        request()->validate([
            'username' => 'required|string|max:255|unique:users|regex:/^[a-zA-Z0-9]+$/',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|same:confirm-password',
            'type' => 'required|integer'
        ]);

        $user=new User;

        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->type=$request->type;

        $user->save();
 
        return view('govOrganizations.create');
    }

    public function store(Request $request){
        request()->validate([
            'username' => 'required|string|max:255|unique:users|regex:/^[a-zA-Z0-9]+$/',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|same:confirm-password',
            'type' => 'required|integer'
        ]);

        $user=new User;

        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->type=$request->type;

        $user->save();



        if($request->type==2){
            return view('govOfficials.create');
        }else if($request->type==0){
            $user=User::all();
            return view('govOrganizations.create',compact('user'));
        }

    }
}
