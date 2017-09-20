<?php

namespace App\Listeners;

use App\Events\CommentPlaced;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyPostOwner
{


    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CommentPlaced  $event
     * @return void
     */
    public function handle(CommentPlaced $event)
    {
        var_dump($event->user_id . ' has posted a comment on ' . $event->post_id);
    }
}
