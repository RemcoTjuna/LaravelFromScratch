<?php
/**
 * Created by PhpStorm.
 * User: Tjuna
 * Date: 19/09/17
 * Time: 09:24
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{

    abstract function getData($id);

}