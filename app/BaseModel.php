<?php
/**
 * Created by PhpStorm.
 * User: Tjuna
 * Date: 19/09/17
 * Time: 09:24
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

abstract class BaseModel extends Model
{

    abstract function getData($id);

    //The scope before the function name will allow you to use it as ->filter($filters) (on a eloquent model)!
    public function scopeFilter($query, $filters){

        if(array_key_exists('month', $filters) && !is_null($filters['month'])){
            $month = $filters['month'];
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if(array_key_exists('year', $filters) && !is_null($filters['year'])){
            $year = $filters['year'];
            $query->whereMonth('created_at', $year);
        }



    }

    //This is a dedicated method
    public static function archives(){
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

}