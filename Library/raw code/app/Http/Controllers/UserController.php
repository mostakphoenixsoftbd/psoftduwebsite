<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index', compact('users'));
  
    }

    public function getUser(){
        // $users = User::all();
        $users = User::orderBy('id', 'desc')->get();
        // return $users;
        return view('users.index', compact('users'));
       /*  ->orderBy('name', 'desc')
               ->take(10)
               ->get(); */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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



 /*        $data = [
            'name' => $request['name'],
            'type' => $request['type'],
            'email' => $request['email'],
            'password' => $request['password'],
            'photo' => $request['photo']
           ];
            return User::create($data); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editUser(request $request){
        $user = User::find ($request->id);
        $user->name = $request->name;
        $user->type = $request->type;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->photo = $request->photo;
        $user->save();
        return response()->json($user);
      }




    public function edit($id)
    {
        $user=User::find($id);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->name=$request['name'];
        $user->type=$request['type'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->photo=$request['photo'];
        $user->update();
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
    }


}
