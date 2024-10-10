<?php

namespace App\Notifications;

use App\Models\ContactUsRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUsRequestNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $request;
    public function __construct(ContactUsRequest $request)
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
                    ->subject('New Contact Us Request')
                    ->line('You have a new contact us request')
                    ->line('First Name: '.$this->request->first_name)
                    ->line('Last Name: '.$this->request->last_name)
                    ->line('Email: '.$this->request->email)
                    ->line('Mobile: '.$this->request->mobile)
                    ->line('Company: '.$this->request->company)
                    ->line('Country/City: '.$this->request->country_city)
                    ->line('Subject: '.$this->request->subject)
                    ->line('Message: '.$this->request->message)
                    ->action('View', route('admin.contact-us-requests.index'));
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
