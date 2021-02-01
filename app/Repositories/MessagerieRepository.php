<?php

namespace App\Repositories;

use App\Models\User;
class MessagerieRepository {

    /**
     * @var User
    */

    private $user;

    public function  __construct(User $user){

        $this->user= $user;
    }

    public function getMessages(int $userId) {
        return $this->user->newQuery()
        ->select('name','id')
        ->where('id','!=',$user)
        ->get();
    }

}