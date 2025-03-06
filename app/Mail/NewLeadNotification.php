<?php

namespace App\Mail;

use App\Models\EnquiryInfo;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewLeadNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiry;

    /**
     * Create a new message instance.
     */
    public function __construct(EnquiryInfo $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('New Lead Alert!')
                    ->view('Email.new_lead');
    }
}
