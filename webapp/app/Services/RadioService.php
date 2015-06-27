<?php

namespace App\Services;

use App\Radio;
use App\Contracts\FileUploaderContract;

class RadioService extends LaravelDataService
{

	protected $fileUploader;

	public function __construct(FileUploaderContract $fileUploader, Radio $radio)
	{

		$this->fileUploader = $fileUploader;

		$this->model = $radio;

		$this->rules = [
		'radio_name' => 'required|max:60',
		'radio_address' => 'max:60',
		'radio_slogan' => 'max:255',
		'radio_logo' => 'max:500',
		'radio_email' =>'max:255|email',
		'radio_phone' => 'max:14',
		'radio_twitter' =>'max:255',
		'radio_facebook' =>'max:255',
		'radio_instagram' => 'max:255',
		'radio_streaming_url' =>'max:255',
		'radio_youtube' =>'max:255'
		];
	}

	public function recordBuilder($data)
	{

		$record = [
		'radio_name' => $data['radio_name'],
		'radio_slogan' => $data['radio_slogan'],
		'radio_address' =>$data['radio_address'],
		'radio_email' => $data['radio_email'],
		'radio_telephone' =>$data['radio_phone'],
		'radio_streaming_url' =>$data['radio_streaming_url'],
		'radio_facebook' =>$data['radio_facebook'],
		'radio_twitter' =>$data['radio_twitter'],
		'radio_instagram' =>$data['radio_instagram'],
		'radio_youtube' =>$data['radio_youtube']
		];

		if (isset($data["radio_image"]))
        {
        	$file = $data["radio_image"];
        	if($imageUrl = $this->fileUploader->upload($file))
        	{
				$record['radio_logo_url'] = $imageUrl;
			}
		}

		return $record;
	}
}
?>