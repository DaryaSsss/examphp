<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Usage;

class PlaceController extends Controller
{
    public function index(){
        $places = Place::all();
        return view('places.index',['places'=>$places]);
    }

    public function add(){
        return view('places.add');
    }

    public function store($id=null){
        if ($id===null){
        $place = new Place();
    }
        else{
            $place = Place::find($id);
        }
        $place->name = request('name');
        $place->description = request('description');
        if(request('repair')==='on'){
            $place->repair = 1;
        }
        else{
            $place->repair = 0;
        }
        if(request('work')==='on'){
            $place->work = 1;
        }
        else{
            $place->work = 0;
        }
        $place->save();
        return redirect('/places');
        
    }

    public function delete($id){
        $place = Place::find($id);
        $place->delete();
        Usage::where('place_id',$id)->delete();
        return redirect('/places');
    }

    public function update($id){
        $place = Place::find($id);
        return view('places.edit',['place'=>$place]);
    }
}
