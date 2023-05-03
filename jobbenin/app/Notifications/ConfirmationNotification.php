<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ConfirmationNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct( )
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
        ->subject('Confirmation de création de compte JobBenin')
        ->greeting('Bonjour ' . $notifiable->name . ',')
        ->line('Merci pour votre inscription sur la plateforme JobBénin. Pour finaliser votre inscription, activez votre compte en cliquant sur le bouton ci dessous.')
        ->action('Activer mon compte', route('connexion', $notifiable->confirmation_token))
        ->line('Si vous ne vous êtes pas inscrit, vous pouvez ignorer cet e-mail.')
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
