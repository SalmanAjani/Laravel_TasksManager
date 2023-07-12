<?php

namespace App\Mail;

use App\Models\Task;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewTaskNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $task;
    public $fromEmail;

    public function __construct(Task $task, $fromEmail)
    {
        $this->task = $task;
        $this->fromEmail = $fromEmail;
    }

    public function build()
    {
        // $fromEmail = auth()->user()->email;

        // return $this
        //     ->from($this->userEmail)
        //     ->subject('New Task Created')
        //     ->view('emails.new_task_notification');

        return $this
            ->from($this->fromEmail)
            ->subject('New Task Created')
            ->view('emails.new_task_notification');
    }
}
