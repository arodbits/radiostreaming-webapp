<?php
namespace App\Services;
use App\Event;
use App\Services\ImageService;

class EventService extends LaravelDataService {
	
	public function __construct(ImageService $imageService, Event $event){

		parent::__construct($imageService);

		$this->model = $event;

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

        if (isset($data["image"]))
        {
        	$file = $data["image"];
			if($imageUrl = $this->imageService->process($file)){
				$record['image_url'] = $imageUrl;
			}
		}
		
		return $record;
	}

}
?>