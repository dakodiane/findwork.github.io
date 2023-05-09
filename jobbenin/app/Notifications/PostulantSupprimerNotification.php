<?php

namespace App\Notifications;

use App\Models\Postuler;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PostulantSupprimerNotification extends Notification
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
        $url = url('/offre');
        return (new MailMessage)
        ->subject('Réponse à votre candidature sur JobBenin!')
            ->greeting('Bonjour '.$this->postuler->user->name.',')
            ->line('Malheureusement votre candidature n\'a pas été retenu pour le poste "'.$this->postuler->offre->poste.'" de"'.$this->postuler->user->name.'"  sur JobBénin.')
             ->line('Nous tenons cependant à vous encourager à continuer votre recherche d\'emploi, et nous vous invitons à consulter régulièrement nos offres. Votre profil pourrait correspondre à d\'autres postes.')
             ->action('Voir les offres', $url)
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
