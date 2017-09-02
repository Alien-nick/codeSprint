<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Carbon\Carbon;
class BidToDemands extends Notification
{
    use Queueable;
    public $buyers;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($buyers)
    {
        $this->buyers = $buyers;
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
    public function toDatabase($notifiable)
    {
        return [
            'buyers' => $this->buyers,
            'user' => auth()->user()
        ];
    }
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
