<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateEvent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    // for dynamic message
    protected $name;
    protected $slug;
    protected $startAt;
    protected $endAt;

    public function __construct($params = array())
    {
        //
        $this->name = $params['name'] ?? '';
        $this->slug = $params['slug'] ?? '';
        $this->startAt = $params['startAt'] ?? '';
        $this->endAt = $params['endAt'] ?? '';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('armandobogayanjr@gmail.com', 'Mailtrap')
            ->subject('Created Event Information')
            ->markdown('mail.createevent')
            ->with([
                'name' => $this->name,
                'slug' => $this->slug,
                'startAt' => $this->startAt,
                'endAt' => $this->endAt,
            ]);
    }
}
