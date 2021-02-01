<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('gestion',compact('users'));
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
        $this->validate($request,[
            'name' =>'required',
            'email' =>'required',
            'password' =>'required',
            'numero' =>'required',
            'region' =>'required',
        ]);
        $user= new User;
        $user->name = $request->input('name'); 
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->numero  = $request->input('numero');
        $user->region = $request->input('region');

        $user->save();
        return redirect('gestion')->with('success','nouvel utilisateur enregistrer ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function show(UserController $userController)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function edit(UserController $userController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nomUser' =>'required',
            'emailUser' =>'required',
            'tel' =>'required',
            'region' =>'required',
            'mdp' =>'required',
        ]);
        $user= User::find($id);
        $user->name = $request->input('nomUser'); 
        $user->email = $request->input('emailUser');
        $user->numero  = $request->input('tel');
        $user->region = $request->input('region');
        $user->password = $request->input('mdp');

        $user->save();
        return redirect('gestion')->with('success','nouvel utilisateur modiier ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('gestion')->with('success','utilisateur effacer ');

    }
}
