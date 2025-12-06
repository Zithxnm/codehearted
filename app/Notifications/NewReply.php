<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewReply extends Notification
{
    use Queueable;


    protected $reply;
    protected $threadId;
    public function __construct($reply, $threadId)
    {
        $this->reply = $reply;
        $this->threadId = $threadId;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'message' => 'New reply from ' . $this->reply->user->name,
            'link' => route('community.show', $this->threadId)
        ];
    }
}
