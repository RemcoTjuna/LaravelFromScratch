<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public static function completedTasks(){
        //We are making a wrapped query within the function.
        return static::where('completed', 0)->get();
    }

    public function scopeIsComplete($query){
        //A Query Scope is a wrapper around a already existing/valid query.
        return $query->where('completed', 0);
    }
}
