<?php
/**
 * Created by PhpStorm.
 * User: Tjuna
 * Date: 20/09/17
 * Time: 09:25
 */

namespace App;


class TagBase extends BaseModel
{

    protected $fillable = ['name'];
    protected $guarded = [];
    protected $hidden = [];

    public function getData($id)
    {
        $object = Tag::find($id);
        if(!$object){
            return [];
        }
        return $object->attributesToArray();
    }

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}