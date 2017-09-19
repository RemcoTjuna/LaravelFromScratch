<?php

namespace App;

use App\BaseModel;
use App\Blog;

class BlogBase extends BaseModel
{

    protected $fillable = ['title', 'content'];
    protected $guarded = [];
    protected $hidden = [];

    /**
     * Will fetch all post with the relation to a post with this id.
     * This will also be handled by Eloquent.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function getData($id)
    {
        $object = Blog::find($id);
        if(!$object){
            return [];
        }
        return $object->attributesToArray();
    }

    public function addPost($title, $content){
        $this->posts()->create(compact('title', 'content'));
    }
}