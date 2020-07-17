<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BussinessContactRequest extends Mailable
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
        return $this->from('support3@getnord.com')
            ->view('mail.bussiness_contact')
            ->subject($this->request->input('subject'))
            ->replyTo($this->request->input('email'))
            ->with('request',
                ['info' => $this->request->input('info'),
                'name' => $this->request->input('name'),
                'last-name' => $this->request->input('last-name'),
                'phone-number' => $this->request->input('phone-number'),
                'company' => $this->request->input('company'),
                'business' => $this->request->input('business'),
                'website' => $this->request->input('website'),
                'page' => $this->request['page'],
                ]);
    }
}
