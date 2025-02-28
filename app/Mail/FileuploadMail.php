<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class FileuploadMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $filePath;
    public $fileName;

    /**
     * Create a new message instance.
     *
     * @param $user
     * @param $filePath
     * @param $fileName
     */
    public function __construct($user, $filePath, $fileName)
    {
        $this->user = $user;
        $this->filePath = $filePath;
        $this->fileName = $fileName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'File Upload Confirmation - ' . config('app.name'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.fileemail', // Your email view file
            with: [
                'user' => $this->user,
                'fileName' => $this->fileName,
                'filePath' => $this->filePath,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [
    //         Attachment::fromPath(storage_path('app/private/' . $this->filePath))
    //             ->as($this->fileName) // Rename file if necessary
    //             ->withMime(mime_content_type(storage_path('app/private/' . $this->filePath))),
    //     ];
    // }
}
