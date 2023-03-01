<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Http;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNotificationsChannelForAdmin extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

    public function send($notifiable, Notification $notification)
    {
        // Отправка уведомления через Telegram к вам
    }

    public function __construct(Request $request)
    {
        $this->name = $request->input('name');
        $this->phone = $request->input('phone');
        $this->region = $request->input('region');
        $this->city = $request->input('city');
        $this->novaposhta = $request->input('novaposhta');
        $this->url = url("/orders/{$request->input('order_id')}");

        $token = 'TELEGRAM_BOT_TOKEN';
        $response = Http::get("https://api.telegram.org/bot{$token}/getUpdates");
        $this->chatId = $response->json('result.0.message.chat.id');
}


    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return [TelegramChannel::class];
    }

    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to($this->chatId)
            ->content("New order from");

    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
