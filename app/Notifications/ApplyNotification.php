<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Visa;

class ApplyNotification extends Notification
{
    use Queueable;
     protected $visa;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Visa $visa)
    {
        //
        $this->visa=$visa;
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
        return (new MailMessage)
        ->line('Im '.$this->visa->name.' from '.$this->visa->country." address : ".$this->visa->street)
        ->line('Phone No'.$this->visa->phone_number.' Work no '.$this->visa->work_phone)
        ->line($this->visa->type.' to '.$this->visa->visa_apply_country)
                    ->action('Goto Dashboard', url('/dashboard'));
                    
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
