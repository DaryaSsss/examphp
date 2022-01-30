<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Place;
use App\Models\Thing;
use App\Models\Usage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsageController extends Controller
{
    public function index($id){
        $users = User::all();
        $places = Place::all();
        $thing = Thing::find($id);
        return view('usages.index',['thing'=>$thing,'users'=>$users,'places'=>$places]);
    }
    public function main(){
        if (Auth::guest()){
            return view('auth.login');
        }
        $usages = Usage::all();
        return view('main',['usages'=>$usages]);
    }
    public function store(){
        $usage = new Usage;
        $user = User::find(request('user_id'));
        $thing = Thing::find(request('thing_id'));
        $place = Place::find(request('place_id'));
        $usage->user()->associate($user);
        $usage->thing()->associate($thing);
        $usage->place()->associate($place);
        $usage->amount = request('amount');
        $usage->save();
        return redirect('/mythings');
    }
}
