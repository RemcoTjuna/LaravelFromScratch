<?php

namespace App;

use App\BaseModel;

class PostBase extends BaseModel
{
    private $standardFillable = ['title', 'body', 'blog_id', 'user_id'];
    private $standardGuarded = [];
    private $standardHidden = [];

    public function __construct(array $fillable, array $guarded, array $hidden)
    {
        parent::__construct('posts', array_merge($this->standardGuarded, $guarded),
            array_merge($this->standardHidden, $hidden), array_merge($this->standardFillable, $fillable));
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

    function getData($id)
    {
        $object = Post::find($id);
        if(!$object){
            return [];
        }
        return $object->attributesToArray();
    }
}
