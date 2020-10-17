<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   
    public function index()
    {
        $users = User::all();
        // return $users;
      return view('users.index', get_defined_vars());
  
    }

     public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'email' => 'required',
            'password' => 'required'
            // 'photo' => 'required'
        ]);

        $users = new User;
        $users->name = $request->input('name');
        $users->type = $request->input('type');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->photo = $request->input('photo');
        $users->save();
        return redirect('/user')->with('success', 'Data Savevd');

    }


    public function show($id)
    {
        
    }

  

    public function edit($id)
    {
        
    }

  
    public function update(Request $request, $id)
    {
     
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'email' => 'required',
            'password' => 'required'
            // 'photo' => 'required'
        ]);

        $users = User::find($id);
        $users->name = $request->input('name');
        $users->type = $request->input('type');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->photo = $request->input('photo');
        $users->save();
        return redirect('/user')->with('success', 'Data Updated!');
    }

    public function destroy($id)
    {
            $user = User::find($id);
            $user->delete();
            return redirect('/user')->with('success', 'Data Deleted!!!');
    
            // return response()->json('User deleted', 200);
      
    }


}
