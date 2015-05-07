<?php namespace App\Services;
use App\Radio;
use Validator;
class RadioService{

	public function validate($data){
		$rules = [
			'name' => 'required|min:60',
			'address' => 'min:60',
			'slogan' => 'min:255',
			'logo' => 'max:500',
			'email' =>'min:255|email',
			'telephone' => 'max:14',
		];
		return Validator::make($data, $rules);
	}

	public function create($data){
		
	}

}

?>