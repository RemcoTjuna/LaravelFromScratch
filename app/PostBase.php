<?php

namespace App;

use App\BaseModel;

class PostBase extends BaseModel implements Commentable
{
    private $standardFillable = ['title', 'body', 'blog_id', 'user_id'];
    private $standardGuarded = [];
    private $standardHidden = [];

    public function __construct()
    {
        parent::__construct('posts', $this->standardGuarded, $this->standardHidden, $this->standardFillable);
    }
    /**
     * Will fetch all comments with the relation to a post with this id.
     * This will also be handled by Eloquent.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    //Will fetch all models with a one to many relationship
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function blogs(){
        return $this->belongsToMany(Blog::class);
    }

    public function getData($id)
    {
        $object = Post::find($id);
        if(!$object){
            return [];
        }
        return $object->attributesToArray();
    }

    public function addComment($content){
        $this->comments()->create(compact('content'));
    }
}
