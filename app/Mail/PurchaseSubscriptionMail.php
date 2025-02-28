<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PurchaseSubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $subscriptionDetails;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $subscriptionDetails)
    {
        $this->user = $user;
        $this->subscriptionDetails = $subscriptionDetails;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Subscription Purchase Confirmation - ' . config('app.name'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.purchase_subscription',
            with: [
                'user' => $this->user,
                'subscriptionDetails' => $this->subscriptionDetails,
            ],
        );
    }
}
