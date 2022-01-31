<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ThingPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function add(User $user){
        if($user->role_id==2){
            return Response::allow();
        }
        return Response::deny('Вы не администратор!');
    }
    public function delete(User $user){
        if($user->role_id==2){
            return Response::allow();
        }
        return Response::deny('Вы не администратор!');
    }
    public function update(User $user){
       if($user->role_id==2){
           return Response::allow();
    }
        return Response::deny('Вы не администратор!');
}
}

    
