<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function acceuil()
    {
        return view('index');
    }
    public function call()
    {
        return view('call');
    }
    public function contact()
    {
        return view ('contact');
    }
    public function meeting()
    { 
        return  view ('meeting');
    }    
    public function chats()
    {
        return view ('chats');
    }
    public function gestion()
    {
        return view ('gestion');
    }

    public function joinCall(Request $request){
        $this->validate($request, [
            'link' => 'required',
        ]);

        return redirect('/call');
    }
}
