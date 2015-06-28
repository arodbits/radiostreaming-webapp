<?php

namespace App\Services;

use App\Services\RadioService;
use App\Services\Registrar;
use Illuminate\Support\MessageBag;
use Illuminate\Contracts\Validation\Factory as Validator;
use App\User;
use App\Radio;

class SubscriptionService{

	protected $radio, $user, $validator;
	protected $rules =  ['user_name' => 'required|max:255',
	'user_email' => 'required|email|max:255|unique:users,email',
	'user_password' => 'required|confirmed|min:6',
	'radio_name' => 'required|max:60',
	'radio_address' => 'max:60',
	'radio_phone' => 'max:14'];

	public function __construct(Radio $radio, User $user, Validator $validator){
		$this->radio = $radio;
		$this->user = $user;
		$this->validator = $validator;
	}

	public function validate($data){
		if(isset($data)){
			return $validator = $this->validator->make($data, $this->rules);
		}
	}

	public function save($data){
		$user = ['name'=> $data['user_name'],
		'email' => $data['user_email'],
		'password' => \Hash::make($data['user_password'])];

		$id = str_random(40);
		$radio = ['id' => $id , 'name' => $data['radio_name'],
		'address' => $data['radio_address'],
		'telephone' => $data['radio_phone']];

		$radio = $this->radio->create($radio);
		$user = $this->user->create($user);
		$user->radio()->associate($radio);
		$user->save();
		return $user;
	}

}





?>