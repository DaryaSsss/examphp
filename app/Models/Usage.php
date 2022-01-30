<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usage extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'user_id' , 'id');
    }

    public function place(){
        return $this->belongsTo(Place::class, 'place_id', 'id');
    }

    public function thing(){
        return $this->belongsTo(Thing::class, 'thing_id', 'id');
    }
}
