<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mail_user;
    public function __construct($mail_user)
    {
        $this->mail_user = $mail_user;
    }
    public function envelope()
    {
        return new Envelope(
            subject: 'Forgot Password',
        );
    }
    public function content()
    {
        return new Content(
            markdown: 'emails.forgot',
            with: [
                'mail_user' => $this->mail_user,
            ],
        );
    }
    public function attachments()
    {
        return [];
    }
}
