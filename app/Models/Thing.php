<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'master');
    }

    public function usages(){
        return $this->hasMany(Usage::class, 'thing_id', 'id');
    }
    
}
