<?php

namespace App\Notifications;

use App\Models\FranchiseRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FranchiseRequestNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $request;
    public function __construct(FranchiseRequest $request)
    {
        $this->request = $request;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('New Franchise Request')
                    ->line('You have a new franchise request')
                    ->line('Name: '.$this->request->name)
                    ->line('Email: '.$this->request->email)
                    ->line('Phone: '.$this->request->phone)
                    ->line('Current City: '.$this->request->current_city)
                    ->line('Company Name: '.$this->request->company_name)
                    ->line('Company Website: '.$this->request->company_website)
                    ->line('Available Investment: '.$this->request->available_investment)
                    ->line('Preferred Location: '.$this->request->preferred_location)
                    ->line('Interest Type: '.$this->request->interest_type)
                    ->line('Past Experience: '.$this->request->past_experience)
                    ->line('Lead From: '.$this->request->lead_from)
                    ->action('View', route('admin.franchise-requests.index'));
        
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
