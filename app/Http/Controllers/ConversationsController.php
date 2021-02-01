<?php

namespace App\Http\Controllers;

use App\Repository\ConversationsRepository;
use Illuminate\Http\Request;
use App\Models\User;
use App\Message; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthManager;
use App\Http\Requests\StoreMessageRequest;


class ConversationsController extends Controller
{
    /**
     *  @var ConversationsRepository
    */

    private $ConversationsRepository;

    /**
     *  @var AuthManager
    */
    private $auth;

    public function __construct(ConversationsRepository $ConversationsRepository, AuthManager $auth)
    {
        $this->middleware('auth');
        $this->ConversationsRepository = $ConversationsRepository;
        $this->auth = $auth;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('conversations/index',[
        'users'=> $this->ConversationsRepository->getConversation($this->auth->user()->id),
        'unread' => $this->ConversationsRepository->unreadCount($this->auth->user()->id)
        ]);
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
    public function store(User $user,  Request $request)
    {
        $this->validate($request,[
            'content' =>'required',
            ]);

            $message = $this->ConversationsRepository->createMessage(
            $request->get('content'), 
            $this->auth->user()->id,
            $b = $user->id
        );
        
        return redirect("conversations/$b");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $me = $this->auth->user();
        $messages = $this->ConversationsRepository->getMessageFor($me->id, $user->id)->paginate(7);
        $unread = $this->ConversationsRepository->unreadCount($me->id);

            if(isset($unread[$user->id]))
            {
                $this->ConversationsRepository->readAllFrom($user->id, $me->id);
                unset($unread[$user->id]);
            } 

        return view('conversations.show',[
            'users'=> $this->ConversationsRepository->getConversation($me->id),
            'user'=> $user,
            'messages'=> $messages,
            'unread' => $unread
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
