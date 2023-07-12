<?php

namespace App\Listeners;

use App\Events\TaskCreatedEvent;
use App\Jobs\SendNewTaskNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TaskCreatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TaskCreatedEvent $event): void
    {
        logger('listener');
        $task = $event->task;
        $userEmail = $event->userEmail;

        logger('listener-2');

        SendNewTaskNotification::dispatch($task, $userEmail);
    }
}
