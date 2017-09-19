<?php

namespace App;

class CommentBase extends BaseModel
{

    private $standardFillable = ['post_id', 'content'];
    private $standardGuarded = [];
    private $standardHidden = [];


    public function __construct()
    {
        parent::__construct('comments', $this->standardGuarded, $this->standardHidden, $this->standardFillable);

    }

    //Will fetch all models with a one to many relationship
    /**
     * Will return the post that the comment belongs to, based on the given id.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function getData($id)
    {
        $object = Comment::find($id);
        if(!$object){
            return [];
        }
        return $object->attributesToArray();
    }
}
