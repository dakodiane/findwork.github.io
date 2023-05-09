<?php

namespace App\Notifications;

use App\Models\Postuler;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EntretienProgrammeNotification extends Notification
{
    use Queueable;

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
        ->subject('Nouvelle Programmation d\'Entretien sur JobBénin ')
     
        ->line('Un entretien a été programmé par  '.$this->postuler->user->name.' pour le poste '.$this->postuler->offre->poste.' auquel vous avez postulé.')
        ->line('Le sujet de l\'entretien est "'.$this->postuler->topic.'" et il aura lieu le '.$this->postuler->start_time.'.')
        ->action('Voir les détails', url('/entretienpostulant'));
    
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
