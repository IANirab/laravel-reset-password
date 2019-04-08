<?php

namespace nirab\resetpassword\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class resetPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($password)
    {
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = config('resetpassword.address');
        $name = config('resetpassword.name');
        return $this->view('resetpassword::email')
                    ->from($email,$name)
                    ->with(['password'=>$this->password]);
    }
}
