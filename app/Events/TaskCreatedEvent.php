<?php

namespace App\Events;

use App\Models\Task;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TaskCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $task;
    public $userEmail;

    public function __construct(Task $task, $userEmail)
    {
        $this->task = $task;
        $this->userEmail = $userEmail;

        logger('event');
        logger($this->task);
        logger($this->userEmail);
    }
}
