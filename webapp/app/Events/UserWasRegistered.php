<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserWasRegistered extends Event {

	use SerializesModels;
	protected $user;
	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($user)
	{
		$this->user = $user;
	}

}
