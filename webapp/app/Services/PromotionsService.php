<?php
namespace App\Services;
use App\Promotions;
use Validator;

class PromotionsService {

	public function validate(array $data){
		return Validator::make($data, [
			'title' => 'required|max:255',
			'address' => 'required|max:255',
			'image_url' => 'max:255',
			'date' => 'required',
			'time' => 'required'
		]);
	}
	public function create(array $data){

		$file =$data['image'];
		$filename= $file->getClientOriginalName();
		$path = public_path() . '/uploads';
		$r = $file->move($path, $filename);

		return Promotions::create([
			'title' => $data['title'],
			'address' => $data['address'],
			'image_url' => $data['image_url'],
			'date' => $data['date'],
			'time' => $data['time'],
			'price' => $data['price']
		]);
	}

}

 ?>