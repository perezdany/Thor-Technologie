<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
      public $data = [];
	
	//public $url = '{config("app.url")}:8000/confirm/{$data["id"]}/{data["token"]}';
     
 
    public function __construct(Array $user)
    {
        //
        $this->data = $user;
       

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.confirm-notif');
    }
}
