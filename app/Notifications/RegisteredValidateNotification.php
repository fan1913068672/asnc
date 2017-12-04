<?php

namespace App\Notifications;

use Dotenv\Validator;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
//class RegisteredValidateNotification extends Notification
class RegisteredValidateNotification extends Notification implements ShouldQueue
{
//    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
//    public $email;
//    public $password;
//    public $name;
//    public function __construct($email,$password,$name)
//    {
//        //
//        $this->email = $email;
//        $this->password = $password;
//        $this->name = $name;
//
//    }
    public function __construct()
    {

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        //必须有个token
//        Validator::make();
        return (new MailMessage)
                    ->line('创建一个新的管理员,如果同意请点击以下链接');
//                    ->action('创建新的管理员',
//                        url(config('app.url').
//                            route(
//                            'active_user',
//                            ["email"=>$this->email,
//                                "password"=>$this->password,
//                                "name"=>$this->name,
//                                ],
//                            false
//                            )
//                        )
//                    );
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
