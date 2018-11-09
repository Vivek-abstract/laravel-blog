<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeAgain extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'vivekbgawande@gmail.com';
        $subject = 'Welcome to my blog!';
        $name = 'Vivek Gawande';

        return $this->markdown('emails.welcome-again')
            ->from($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
            ->with(['name' => $this->data['name']]);
    }
}
