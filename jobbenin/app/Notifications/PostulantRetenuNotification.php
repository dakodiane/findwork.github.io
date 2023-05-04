<?php

namespace App\Notifications;

use App\Models\Postuler;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PostulantRetenuNotification extends Notification
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
            ->subject('Félicitations!! Vous avez été retenu pour un poste sur JobBénin')
            ->greeting('Bonjour '.$this->postuler->user->name.',')
            ->line('Nous sommes ravis de vous informer que vous avez été retenu pour le poste "'.$this->postuler->offre->poste.'" sur JobBénin.')
             ->line('Merci de votre confiance,')
            ->line('JobBénin');
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
