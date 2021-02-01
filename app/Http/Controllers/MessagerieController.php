<?php

namespace App\Http\Controllers;

use App\Repositories\MessagerieRepository;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthManager;
class MessagerieController extends Controller
{
    /**
     *  @var MessagerieRepository
    */

    private $MessagerieRepository;

    /**
     *  @var AuthManager
    */
    private $auth;

    public function __construct(MessagerieRepository $MessagerieRepository, AuthManager $auth)
    {
        $this->MessagerieRepository = $MessagerieRepository;
        $this->auth = $auth;
    }
    public function index()
    {
        return view('chats',[
        'users'=> $this->MessagerieRepository->getMessages($this->auth->user()->id)
        ]);
    }

    public function show(User $user)
    {
        
        return view('chats',[
            'users'=> $this->MessagerieRepository->getMessages($this->auth->user()->id),
            'user'=>$user
            ]);
    } 

}
