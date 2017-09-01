<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Carbon\Carbon;

class BidToDemands extends Notification
{
    use Queueable;

    protected $bids;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($bids)
    {
        $this->bids = $bids;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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

    /**
     * Get the Database representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        //dd($notifiable);
        //'bidTime' => Carbon::now(),
        return [
            'bid' => $this->bids,
            'user' => $notifiable
        ];
    }
}
