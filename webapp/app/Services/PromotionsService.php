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
			'date' => 'required|date',
			'time' => array('regex:/[0-9]:[0-5][0-9]\s?(AM|PM|am|pm)|[0-1][0-2]:[0-5][0-9]\s?(AM|am|pm|PM)/', 'required'),
			'price' => 'numeric|min:0'
		]);
	}
	public function create(array $data){

		$file =$data['image'];
		$filename= $file->getClientOriginalName();
		$path = public_path() . '/uploads';
		$r = $file->move($path, $filename);

		$data['image_url'] = $filename;

		return Promotions::create([
			'title' => $data['title'],
			'address' => $data['address'],
			'image_url' => $data['image_url'],
			'date' => date('Y-m-d', strtotime($data['date'])),
			'time' => date('H:i', strtotime($data['time'])),
			'price' => $data['price']
		]);
	}

}

 ?>