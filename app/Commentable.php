<?php
/**
 * Created by PhpStorm.
 * User: Tjuna
 * Date: 19/09/17
 * Time: 10:23
 */

namespace App;


interface Commentable
{

    function addComment($content, $user_id);

}