<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PublicationOffreNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
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
        ->subject('Publication Offre Approuvée sur JobBenin')
        ->greeting('Bonjour ' . $notifiable->name . ',')
        ->line('Votre Offre a été publiée avec   succès  sur la plateforme JobBénin.Visualisez la plublication,en cliquant sur le bouton ci dessous.')
        ->action('Voir l\Offre', route('detail_offre', $notifiable->confirmation_token))
        
        ->line('JobBénin.');
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
