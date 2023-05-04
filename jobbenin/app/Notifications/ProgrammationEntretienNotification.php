<?php

namespace App\Notifications;

use App\Models\Postuler;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ProgrammationEntretienNotification extends Notification
{
    use Queueable;
    protected $postuler;

    /**
     * Create a new notification instance.
     */
    public function __construct(Postuler $postuler)
    {
        $this->postuler = $postuler;
    }
    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Création de nouvel entretien sur JobBenin')
                    ->greeting('Bonjour ' . $notifiable->name . ',')
                    ->line('Votre entretien a été créé avec succès!.')
                    ->line('JobBenin');
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
