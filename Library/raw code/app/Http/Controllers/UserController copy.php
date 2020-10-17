<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }

    public function getUser(){
        $users = User::all();
        // return $users;
        return view('users.index', compact('users'));
    }


    public function postUser(Request $request){
        
        // return "Its working";
        $request->validate([
            'name' => 'required|max:255',
            'type' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            // 'photo' => 'nullable',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->type = $request->type;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->photo = $request->photo;
        $user->save();
        return ['success'=>true, 'message'=>'data inserted successfully!'];
    }
}
