<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    public function usages(){
        return $this->hasMany(Usage::class, 'place_id', 'id');
    }
}
