<?php namespace App\Services;
use Validator;
use App\Contracts\LaravelDataContract;

abstract class LaravelDataService implements LaravelDataContract{

	protected $model;
	protected $rules;

	public function validate(array $data){
		return Validator::make($data, $this->rules);
	}
	// Principal method for creating a new production entry
	public function create(array $data){
		return $this->save($data);
	}
	
	protected function imageProcessor($data){

		if(isset($data['image']))
		{
			$file = $data['image'];
			// If the image is valid...
			if($this->isValidImage($file))
			{
				// If the File upload successfully...
				if($this->upload($file))
				{ 
					return $file->getClientOriginalName();
				}
			}
		}
	}
	// Upload a new file
	protected function upload($file)
	{
		$path = public_path() . '/uploads';
		$filename= $file->getClientOriginalName();
		$newFile = $file->move($path, $filename);
		return $newFile;
	}
	// Save a new record
	public function save($data)
	{
		$readyData = $this->recordBuilder($data);
		return $this->model->create($readyData);
	}
	//  Update a record
	public function update($id,$data)
	{
		$record = $this->model->find($id);
		$readyData = $this->recordBuilder($data);
		$record->update($readyData);
		return $record;
	}
	
	/*Main method for image validation - NO RETUNING ERROR MESSAGE YET*/
	protected function isValidImage($file){
		$validImageMime = $this->isValidMimeType($file);
		$validImageSize = $this->isValidImageSize($file);
		
		if($validImageMime && $validImageSize){
			return $file;
		}
	}
    /*Check if the image is of a valid file size*/
	protected function isValidImageSize($file){
		$validImageSize = 500000;
		$fileSize = $file->getClientSize();
		if ($fileSize <= $validImageSize && $fileSize > 0){
			return $fileSize;
		}
	}
	/*Check if the image is of a valid Mime Type*/

	protected function isValidMimeType($file){
		$fileMimeType = $file->getMimeType();
		$validMimeTypes = ['image/jpeg', 'image/png'];
		foreach($validMimeTypes as $mime){
			if ($fileMimeType==$mime){
				return $fileMimeType;
			}
		}
	}

}
?>