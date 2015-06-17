<?php 
namespace App\Services;
use App\Contracts\FileUploaderContract;

class LaravelFileUploader implements FileUploaderContract{

	protected $errors = array();

	// Upload a new file
	public function upload($file, $path = null)
	{
		$path == null ? $path = public_path() . '/uploads' :  $path;
		$filename= $file->getClientOriginalName();
		try{
			$newFile = $file->move($path, $filename);
			return $newFile;
		}catch(\Exception $e){
			$this->errors[] = $e->getMessage();
		}
	}

	public function errors(){
		return $this->errors;
	}

}

?>