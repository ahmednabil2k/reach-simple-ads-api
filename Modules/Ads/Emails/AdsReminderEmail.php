<?php

namespace Modules\Ads\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdsReminderEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'New reminder for Your tomorrow Ads';

    public $mediaAd;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mediaAd)
    {
        $this->mediaAd = $mediaAd;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('ads::emails.ads-reminder-email')
                    ->with('ad', $this->mediaAd);
    }
}
