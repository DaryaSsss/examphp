<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Usage;


class ThingController extends Controller
{
    public function index(){
        $things = Thing::all();
        return view('things.index',['things'=>$things]);
    }

    public function myThings(){
        $things = Thing::where('master',(Auth::id()))->get();
        return view('things.mythings',['things'=>$things]);
    }

    public function add(){
        return view('things.add');
    }

    public function store($id=null){
        if ($id===null){
        $user = User::find(Auth::id());
        $thing = new Thing();
    }
        else{
            $thing = Thing::find($id);
        }
        $thing->name = request('name');
        $thing->description = request('description');
        $thing->wrnt = request ('wrnt');
        if ($id===null){
            $thing->user()->associate($user);
        }
        $thing->save();
        return redirect('/things');
        
    }

    public function delete($id){
        $thing = Thing::find($id);
        $thing->delete();
        Usage::where('thing_id',$id)->delete();
        return redirect('/things');
    }

    public function update($id){
        $thing = Thing::find($id);
        return view('things.edit',['thing'=>$thing]);
    }
}
