<?php

namespace App;

use App\BaseModel;
use App\Blog;
use Illuminate\Database\Eloquent\Model as Eloquent;

class BlogBase extends BaseModel
{

    private $standardFillable = ['title', 'content'];
    private $standardGuarded = [];
    private $standardHidden = [];

    public function __construct(array $fillable, array $guarded, array $hidden)
    {
        parent::__construct('blogs', array_merge($this->standardGuarded, $guarded),
            array_merge($this->standardHidden, $hidden), array_merge($this->standardFillable, $fillable));
    }

    /**
     * Will fetch all post with the relation to a post with this id.
     * This will also be handled by Eloquent.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(){
        return $this->hasMany(Post::class);
    }

    function getData($id)
    {
        $object = Blog::find($id);
        if(!$object){
            return [];
        }
        return $object->attributesToArray();
    }
}