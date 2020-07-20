<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The request instance
     *
     * @var request
     */

    protected $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@getnord.com')
            ->view('mail.contact')
            ->subject($this->request->input('subject'))
            ->replyTo($this->request->input('email'))
            ->with('request', ['message' => $this->request->input('message')]);
    }
}
