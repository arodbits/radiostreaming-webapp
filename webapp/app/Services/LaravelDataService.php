<?php namespace App\Services;
use Validator;
use App\Contracts\LaravelDataContract;
use App\Services\ImageService;
abstract class LaravelDataService implements LaravelDataContract{

	protected $model;
	protected $rules;
	protected $imageService;

	public function __construct(ImageService $imageService){
		$this->imageService = $imageService;
	}

	public function validate(array $data){
		return Validator::make($data, $this->rules);
	}
	/**
	 * [imageProcessor description]
	 * @param  Array
	 * @return String
	 */
	protected function imageProcessor($file=null){

		if($file != null)
		{
			// If the image is valid...
			if($this->imageService->isValid($file))
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
		//Construct the data record. How can we improve it?
		$readyData = $this->recordBuilder($data);
		// Call to the corresponding Laravel Model. New entry using the create method. 
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
}
?>