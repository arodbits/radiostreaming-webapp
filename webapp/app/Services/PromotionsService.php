<?php
namespace App\Services;
use App\Promotion;

class PromotionsService extends LaravelDataService {
	
	public function __construct(){
		$this->model = new Promotion;	
		$this->rules = [
			'title' => 'required|max:255',
			'address' => 'required|max:255',
			'image' => 'max:500',
			'date' => 'required|date',
			'time' => array('regex:/[0-9]:[0-5][0-9]\s?(AM|PM|am|pm)|[0-1][0-2]:[0-5][0-9]\s?(AM|am|pm|PM)/', 'required'), // 12 hours format.
			'price' => array('regex:/[0-9]{1,20}.?[0-9]{0,20}/') //Decimal/Int values
		];
	}
	
	// Compose the record 
	public function recordBuilder($data)
	{

		$record = [
			'title' => $data['title'],
			'address' => $data['address'],
			'date' => date('Y-m-d', strtotime($data['date'])),
			'time' => date('H:i', strtotime($data['time'])),
			'price' => $data['price']
		];	


		if($imageUrl = $this->imageProcessor($data)){
			$record['image_url'] = $imageUrl;
		}
		
		return $record;
	}

}
?>