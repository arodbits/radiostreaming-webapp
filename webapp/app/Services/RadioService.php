<?php namespace App\Services;
use App\Radio;


class RadioService extends LaravelDataService{

	public function __construct(){
		
		$this->model = new Radio;

		$this->rules = [
			'name' => 'required|max:60',
			'address' => 'max:60',
			'slogan' => 'max:255',
			'logo' => 'max:500',
			'email' =>'max:255|email|required',
			'phone' => 'max:14',
		];
	}

	public function recordBuilder($data){

		$record = [
			'name' => $data['name'],
			'slogan' => $data['slogan'],
			'address' =>$data['address'],
			'email' => $data['email'],
			'telephone' =>$data['phone']
		];
		
		if($imageUrl = $this->imageProcessor($data)){
			$record['logo_url'] = $imageUrl;
		}
		
		return $record;
	}
}

?>