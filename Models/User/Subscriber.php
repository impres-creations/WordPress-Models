<?php

namespace Models\UserModel;

/**
 * This is the model if you want to get the users of the rol subscriber
 *
 * Class Subscriber
 * @package App\Models|UserModel
 */
class Subscriber extends UserModel
{
	/**
	 * Subscriber constructor.
	 *
	 * Set all the arguments that are default for this Model
	 */
	public function __construct()
	{
		$this->type('subscriber');
	}
}