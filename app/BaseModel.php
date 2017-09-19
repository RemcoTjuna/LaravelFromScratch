<?php
/**
 * Created by PhpStorm.
 * User: Tjuna
 * Date: 19/09/17
 * Time: 09:24
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class BaseModel extends Eloquent
{

    //Fields that are not allowed to get filled by a input (form, etc)
    protected $guarded = [];

    //Hidden values for an array
    protected $hidden = [];

    //Fields that are mass assignable
    protected $fillable = [];

    //Table assigned to model
    protected $table = "";

    /**
     * BaseModel constructor.
     * @param string $table
     * @param array $guarded
     * @param array $hidden
     * @param array $fillable
     */
    public function __construct($table, array $guarded, array $hidden, array $fillable)
    {
        $this->guarded = $guarded;
        $this->hidden = $hidden;
        $this->fillable = $fillable;
        $this->table = $table;
    }

    abstract function getData($id);

}