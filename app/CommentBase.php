<?php

namespace App;

class CommentBase extends BaseModel
{

    protected $fillable = ['post_id', 'content'];
    protected $guarded = [];
    protected $hidden = [];

    //Will fetch all models with a one to many relationship
    /**
     * Will return the post that the comment belongs to, based on the given id.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post(){
        return $this->belongsTo(Post::class);
    }

    function getData($id)
    {
        $object = Comment::find($id);
        if(!$object){
            return [];
        }
        return $object->attributesToArray();
    }
}
