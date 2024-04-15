<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $form;
    public $pdfUrl;

    /**
     * Create a new message instance.
     *
     * @param $form
     * @param $pdfUrl
     */
    public function __construct($form, $pdfUrl)
    {
        $this->form = $form;
        $this->pdfUrl = $pdfUrl;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.form_submitted');
    }
}
