<?php

namespace App\Handlers\Events;

use App\Events\UserWasRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Illuminate\Contracts\Mail\Mailer as MailContract;

class EmailRegistrationConfirmation {
	protected $mail;
	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct(MailContract $mail)
	{
		$this->mail = $mail;
	}

	/**
	 * Handle the event.
	 *
	 * @param  UserWasRegistered  $event
	 * @return void
	 */
	public function handle(UserWasRegistered $event)
	{
		$this->mail->send('emails.welcome', ['key' => 'value'], function($message)
		{
			$message->to('anthonyrodriguez.itt@gmail.com', 'John Smith')->subject('Welcome!');
		});
	}

}


