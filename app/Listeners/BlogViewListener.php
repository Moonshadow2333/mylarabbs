<?php

namespace App\Listeners;

use App\Events\BlogView;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BlogViewListener
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
     * @param  \App\Events\BlogView  $event
     * @return void
     */
    public function handle(BlogView $event)
    {
        $post = $event->user;
        dd('浏览数+1！');
    }
}
