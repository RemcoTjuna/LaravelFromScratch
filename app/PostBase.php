<?php

namespace App;

use App\BaseModel;

class PostBase extends BaseModel implements Commentable
{
    protected $fillable = ['title', 'content', 'blog_id', 'user_id'];
    protected $guarded = [];
    protected $hidden = [];

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

    public function addComment($content, $user_id){
        $this->comments()->create(compact('content', 'user_id'));
    }

    public function addTag($name){
        $tag = $this->tags()->create(compact('name'));
        $this->tags()->attach($tag);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
