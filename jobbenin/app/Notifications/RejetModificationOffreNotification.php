<?php

namespace App\Notifications;

use App\Models\Offre;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class RejetModificationOffreNotification extends Notification
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
         

        return (new MailMessage)
                ->subject(' Rejet de  Modification d\'Offre sur JobBénin')
                    ->line('Cher recruteur, nous avons examiné votre Modification de publication d\'offre d\'emploi sur JobBénin et regrettons de vous informer que nous ne pouvons pas la publier pour le moment.')
                    ->line ('Nous vous prions de mieux remplir les informations requises et de soumettre à nouveau.')
                   
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
