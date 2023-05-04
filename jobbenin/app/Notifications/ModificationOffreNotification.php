<?php

namespace App\Notifications;

use App\Models\Offre;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ModificationOffreNotification extends Notification
{
    use Queueable;

    protected $offre;


    /**
     * Create a new notification instance.
     */
    public function __construct(Offre $offre )
    {
        $this->offre = $offre;
       
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
        $url = route('detail_offre', $this->offre->id);
  
        return (new MailMessage)
        ->subject('Modification d\'Offre publiée sur JobBénin')
        ->line('Votre Offre modifiée a été publiée avec succès sur la plateforme JobBénin. Visualisez la publication en cliquant sur le bouton ci-dessous.')
        ->action('Voir l\'Offre', $url)
        ->line('Merci de votre confiance.JobBénin');
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
