<?php

namespace App\Jobs;

use App\Models\Task;
use Illuminate\Bus\Queueable;
use App\Mail\NewTaskNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendNewTaskNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $task;
    protected $fromEmail;

    public function __construct(Task $task, $fromEmail)
    {
        $this->task = $task;
        $this->fromEmail = $fromEmail;
    }

    public function handle(): void
    {
        $adminEmail = env('ADMIN_EMAIL');

        Mail::to($adminEmail)
            ->send(new NewTaskNotification($this->task, $this->fromEmail));
    }
}
