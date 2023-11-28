<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use Illuminate\Mail\Mailables\Address;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($viewData)
    {
        $this->viewData = $viewData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('ekjp.adteckulim@gmail.com', 'ekjp admin'),
            subject: 'Permohonan eKJP ADTEC Kulim',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $maklumat = $this->viewData;
        return new Content(
            view: 'mail.ekjpmail',
            with: ['maklumat' => $maklumat],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
