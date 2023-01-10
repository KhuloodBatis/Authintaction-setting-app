<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\VonageMessage;
use Illuminate\Notifications\Notification;

class PaymentReceived extends Notification
{
    use Queueable;
    protected $amount;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database', 'vonage'];
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
            ->greeting("What's Up?")
            ->line('The introduction to the notification.')
            ->line('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**

     * Get the Vonage / SMS representation of the notification.

     *

     * @param    mixed  $notifiable

     * @return  \Illuminate\Notifications\Messages\VonageMessage

     */

    public function toVonage($notifiable)

    {

        return (new VonageMessage())

            ->content('You have now registered for My Amazing App!');
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
            'amount' => $this->amount
        ];
    }
}
