<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notifiable;
use App\Notifications\RegisteredValidateNotification;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class LogRegisteredUser
{
    use Notifiable;
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user = $event->user;

        $email = encrypt($user->email);
        $url = route('active',['email'=>$email,],true);
        Mail::send('emails.welcome',['url'=>$url],
            function($message) use($user){
            $message->to(config('mail.from.address'));
            $message->subject('激活');
        });
    }
}
